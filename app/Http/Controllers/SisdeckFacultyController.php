<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckFacultyRequest;
use App\Http\Requests\UpdateSisdeckFacultyRequest;
use App\Repositories\SisdeckFacultyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckFacultyController extends AppBaseController
{
    /** @var  SisdeckFacultyRepository */
    private $sisdeckFacultyRepository;

    public function __construct(SisdeckFacultyRepository $sisdeckFacultyRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckFacultyRepository = $sisdeckFacultyRepo;
    }

    /**
     * Display a listing of the SisdeckFaculty.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckFaculties = $this->sisdeckFacultyRepository->all();

        return view('/sisdeck/faculties/index')
            ->with('sisdeckFaculties', $sisdeckFaculties);
    }

    /**
     * Show the form for creating a new SisdeckFaculty.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/faculties/create');
    }

    /**
     * Store a newly created SisdeckFaculty in storage.
     *
     * @param CreateSisdeckFacultyRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckFacultyRequest $request)
    {
        $input = $request->all();

        $sisdeckFaculty = $this->sisdeckFacultyRepository->create($input);

        Flash::success('Faculty saved successfully.');

        return redirect(route('sisdeck.faculties.index'));
    }

    /**
     * Display the specified SisdeckFaculty.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckFaculty = $this->sisdeckFacultyRepository->find($id);

        if (empty($sisdeckFaculty)) {
            Flash::error('Faculty not found.');

            return redirect(route('sisdeck.faculties.index'));
        }

        return view('/sisdeck/faculties/show')->with('sisdeckFaculty', $sisdeckFaculty);
    }

    /**
     * Show the form for editing the specified SisdeckFaculty.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckFaculty = $this->sisdeckFacultyRepository->find($id);

        if (empty($sisdeckFaculty)) {
            Flash::error('Faculty not found.');

            return redirect(route('sisdeck.faculties.index'));
        }

        return view('/sisdeck/faculties/edit')->with('sisdeckFaculty', $sisdeckFaculty);
    }

    /**
     * Update the specified SisdeckFaculty in storage.
     *
     * @param int $id
     * @param UpdateSisdeckFacultyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckFacultyRequest $request)
    {
        $sisdeckFaculty = $this->sisdeckFacultyRepository->find($id);

        if (empty($sisdeckFaculty)) {
            Flash::error('Faculty not found.');

            return redirect(route('sisdeck.faculties.index'));
        }

        $sisdeckFaculty = $this->sisdeckFacultyRepository->update($request->all(), $id);

        Flash::success('Faculty updated successfully.');

        return redirect(route('sisdeck.faculties.index'));
    }

    /**
     * Remove the specified SisdeckFaculty from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckFaculty = $this->sisdeckFacultyRepository->find($id);

        if (empty($sisdeckFaculty)) {
            Flash::error('Faculty not found.');

            return redirect(route('sisdeck.faculties.index'));
        }

        $this->sisdeckFacultyRepository->delete($id);

        Flash::success('Faculty deleted successfully.');

        return redirect(route('sisdeck.faculties.index'));
    }
}
