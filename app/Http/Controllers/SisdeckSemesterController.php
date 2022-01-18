<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckSemesterRequest;
use App\Http\Requests\UpdateSisdeckSemesterRequest;
use App\Repositories\SisdeckSemesterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckSemesterController extends AppBaseController
{
    /** @var  SisdeckSemesterRepository */
    private $sisdeckSemesterRepository;

    public function __construct(SisdeckSemesterRepository $sisdeckSemesterRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckSemesterRepository = $sisdeckSemesterRepo;
    }

    /**
     * Display a listing of the SisdeckSemester.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckSemesters = $this->sisdeckSemesterRepository->all();

        return view('/sisdeck/semesters/index')->with('sisdeckSemesters', $sisdeckSemesters);
    }

    /**
     * Show the form for creating a new SisdeckSemester.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/semesters/create');
    }

    /**
     * Store a newly created SisdeckSemester in storage.
     *
     * @param CreateSisdeckSemesterRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckSemesterRequest $request)
    {
        $input = $request->all();
        $input['name'] = ucwords(strtolower($input['name']));
        $input['description'] = ucfirst(strtolower($input['description']));

        $sisdeckSemester = $this->sisdeckSemesterRepository->create($input);

        Flash::success('Semester saved successfully.');

        return redirect(route('sisdeck.semesters.index'));
    }

    /**
     * Display the specified SisdeckSemester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckSemester = $this->sisdeckSemesterRepository->find($id);

        if (empty($sisdeckSemester)) {
            Flash::error('Semester not found.');

            return redirect(route('sisdeck.semesters.index'));
        }

        return view('/sisdeck/semesters/show')->with('sisdeckSemester', $sisdeckSemester);
    }

    /**
     * Show the form for editing the specified SisdeckSemester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckSemester = $this->sisdeckSemesterRepository->find($id);

        if (empty($sisdeckSemester)) {
            Flash::error('Semester not found.');

            return redirect(route('sisdeck.semesters.index'));
        }

        return view('/sisdeck/semesters/edit')->with('sisdeckSemester', $sisdeckSemester);
    }

    /**
     * Update the specified SisdeckSemester in storage.
     *
     * @param int $id
     * @param UpdateSisdeckSemesterRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckSemesterRequest $request)
    {
        $sisdeckSemester = $this->sisdeckSemesterRepository->find($request->id);

        if (empty($sisdeckSemester)) {
            Flash::error('Semester not found.');

            return redirect(route('sisdeck.semesters.index'));
        }

        $input = $request->all();
        $input['name'] = ucwords(strtolower($input['name']));
        $input['description'] = ucfirst(strtolower($input['description']));

        $sisdeckSemester = $this->sisdeckSemesterRepository->update($input, $request->id);

        Flash::success('Semester updated successfully.');

        return redirect(route('sisdeck.semesters.index'));
    }

    /**
     * Remove the specified SisdeckSemester from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckSemester = $this->sisdeckSemesterRepository->find($id);

        if (empty($sisdeckSemester)) {
            Flash::error('Semester not found.');

            return redirect(route('sisdeck.semesters.index'));
        }

        $this->sisdeckSemesterRepository->delete($id);

        Flash::success('Semester deleted successfully.');

        return redirect(route('sisdeck.semesters.index'));
    }
}
