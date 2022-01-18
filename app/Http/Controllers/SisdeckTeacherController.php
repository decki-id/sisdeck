<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckTeacherRequest;
use App\Http\Requests\UpdateSisdeckTeacherRequest;
use App\Repositories\SisdeckTeacherRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckTeacherController extends AppBaseController
{
    /** @var  SisdeckTeacherRepository */
    private $sisdeckTeacherRepository;

    public function __construct(SisdeckTeacherRepository $sisdeckTeacherRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckTeacherRepository = $sisdeckTeacherRepo;
    }

    /**
     * Display a listing of the SisdeckTeacher.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckTeachers = $this->sisdeckTeacherRepository->all();

        return view('/sisdeck/teachers/index')
            ->with('sisdeckTeachers', $sisdeckTeachers);
    }

    /**
     * Show the form for creating a new SisdeckTeacher.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/teachers/create');
    }

    /**
     * Store a newly created SisdeckTeacher in storage.
     *
     * @param CreateSisdeckTeacherRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckTeacherRequest $request)
    {
        $input = $request->all();

        $sisdeckTeacher = $this->sisdeckTeacherRepository->create($input);

        Flash::success('Teacher saved successfully.');

        return redirect(route('sisdeck.teachers.index'));
    }

    /**
     * Display the specified SisdeckTeacher.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckTeacher = $this->sisdeckTeacherRepository->find($id);

        if (empty($sisdeckTeacher)) {
            Flash::error('Teacher not found.');

            return redirect(route('sisdeck.teachers.index'));
        }

        return view('/sisdeck/teachers/show')->with('sisdeckTeacher', $sisdeckTeacher);
    }

    /**
     * Show the form for editing the specified SisdeckTeacher.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckTeacher = $this->sisdeckTeacherRepository->find($id);

        if (empty($sisdeckTeacher)) {
            Flash::error('Teacher not found.');

            return redirect(route('sisdeck.teachers.index'));
        }

        return view('/sisdeck/teachers/edit')->with('sisdeckTeacher', $sisdeckTeacher);
    }

    /**
     * Update the specified SisdeckTeacher in storage.
     *
     * @param int $id
     * @param UpdateSisdeckTeacherRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckTeacherRequest $request)
    {
        $sisdeckTeacher = $this->sisdeckTeacherRepository->find($id);

        if (empty($sisdeckTeacher)) {
            Flash::error('Teacher not found.');

            return redirect(route('sisdeck.teachers.index'));
        }

        $sisdeckTeacher = $this->sisdeckTeacherRepository->update($request->all(), $id);

        Flash::success('Teacher updated successfully.');

        return redirect(route('sisdeck.teachers.index'));
    }

    /**
     * Remove the specified SisdeckTeacher from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckTeacher = $this->sisdeckTeacherRepository->find($id);

        if (empty($sisdeckTeacher)) {
            Flash::error('Teacher not found.');

            return redirect(route('sisdeck.teachers.index'));
        }

        $this->sisdeckTeacherRepository->delete($id);

        Flash::success('Teacher deleted successfully.');

        return redirect(route('sisdeck.teachers.index'));
    }
}
