<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckStudentRequest;
use App\Http\Requests\UpdateSisdeckStudentRequest;
use App\Repositories\SisdeckStudentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckStudentController extends AppBaseController
{
    /** @var  SisdeckStudentRepository */
    private $sisdeckStudentRepository;

    public function __construct(SisdeckStudentRepository $sisdeckStudentRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckStudentRepository = $sisdeckStudentRepo;
    }

    /**
     * Display a listing of the SisdeckStudent.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckStudents = $this->sisdeckStudentRepository->all();

        return view('/sisdeck/students/index')
            ->with('sisdeckStudents', $sisdeckStudents);
    }

    /**
     * Show the form for creating a new SisdeckStudent.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/students/create');
    }

    /**
     * Store a newly created SisdeckStudent in storage.
     *
     * @param CreateSisdeckStudentRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckStudentRequest $request)
    {
        $input = $request->all();

        $sisdeckStudent = $this->sisdeckStudentRepository->create($input);

        Flash::success('Student saved successfully.');

        return redirect(route('sisdeck.students.index'));
    }

    /**
     * Display the specified SisdeckStudent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckStudent = $this->sisdeckStudentRepository->find($id);

        if (empty($sisdeckStudent)) {
            Flash::error('Student not found.');

            return redirect(route('sisdeck.students.index'));
        }

        return view('/sisdeck/students/show')->with('sisdeckStudent', $sisdeckStudent);
    }

    /**
     * Show the form for editing the specified SisdeckStudent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckStudent = $this->sisdeckStudentRepository->find($id);

        if (empty($sisdeckStudent)) {
            Flash::error('Student not found.');

            return redirect(route('sisdeck.students.index'));
        }

        return view('/sisdeck/students/edit')->with('sisdeckStudent', $sisdeckStudent);
    }

    /**
     * Update the specified SisdeckStudent in storage.
     *
     * @param int $id
     * @param UpdateSisdeckStudentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckStudentRequest $request)
    {
        $sisdeckStudent = $this->sisdeckStudentRepository->find($id);

        if (empty($sisdeckStudent)) {
            Flash::error('Student not found.');

            return redirect(route('sisdeck.students.index'));
        }

        $sisdeckStudent = $this->sisdeckStudentRepository->update($request->all(), $id);

        Flash::success('Student updated successfully.');

        return redirect(route('sisdeck.students.index'));
    }

    /**
     * Remove the specified SisdeckStudent from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckStudent = $this->sisdeckStudentRepository->find($id);

        if (empty($sisdeckStudent)) {
            Flash::error('Student not found.');

            return redirect(route('sisdeck.students.index'));
        }

        $this->sisdeckStudentRepository->delete($id);

        Flash::success('Student deleted successfully.');

        return redirect(route('sisdeck.students.index'));
    }
}
