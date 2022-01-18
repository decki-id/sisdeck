<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckClassroomRequest;
use App\Http\Requests\UpdateSisdeckClassroomRequest;
use App\Repositories\SisdeckClassroomRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckClassroomController extends AppBaseController
{
    /** @var  SisdeckClassroomRepository */
    private $sisdeckClassroomRepository;

    public function __construct(SisdeckClassroomRepository $sisdeckClassroomRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckClassroomRepository = $sisdeckClassroomRepo;
    }

    /**
     * Display a listing of the SisdeckClassroom.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckClassrooms = $this->sisdeckClassroomRepository->all();

        return view('/sisdeck/classrooms/index')
            ->with('sisdeckClassrooms', $sisdeckClassrooms);
    }

    /**
     * Show the form for creating a new SisdeckClassroom.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/classrooms/create');
    }

    /**
     * Store a newly created SisdeckClassroom in storage.
     *
     * @param CreateSisdeckClassroomRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckClassroomRequest $request)
    {
        $input = $request->all();
        $input['name'] = ucwords(strtolower($input['name']));
        $input['description'] = ucfirst(strtolower($input['description']));

        $sisdeckClassroom = $this->sisdeckClassroomRepository->create($input);

        Flash::success('Classroom saved successfully.');

        return redirect(route('sisdeck.classrooms.index'));
    }

    /**
     * Display the specified SisdeckClassroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckClassroom = $this->sisdeckClassroomRepository->find($id);

        if (empty($sisdeckClassroom)) {
            Flash::error('Classroom not found.');

            return redirect(route('sisdeck.classrooms.index'));
        }

        return view('/sisdeck/classrooms/show')->with('sisdeckClassroom', $sisdeckClassroom);
    }

    /**
     * Show the form for editing the specified SisdeckClassroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckClassroom = $this->sisdeckClassroomRepository->find($id);

        if (empty($sisdeckClassroom)) {
            Flash::error('Classroom not found.');

            return redirect(route('sisdeck.classrooms.index'));
        }

        return view('/sisdeck/classrooms/edit')->with('sisdeckClassroom', $sisdeckClassroom);
    }

    /**
     * Update the specified SisdeckClassroom in storage.
     *
     * @param int $id
     * @param UpdateSisdeckClassroomRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckClassroomRequest $request)
    {
        $sisdeckClassroom = $this->sisdeckClassroomRepository->find($request->id);

        if (empty($sisdeckClassroom)) {
            Flash::error('Classroom not found.');

            return redirect(route('sisdeck.classrooms.index'));
        }

        $input = $request->all();
        $input['name'] = ucwords(strtolower($input['name']));
        $input['description'] = ucfirst(strtolower($input['description']));

        $sisdeckClassroom = $this->sisdeckClassroomRepository->update($input, $request->id);

        Flash::success('Classroom updated successfully.');

        return redirect(route('sisdeck.classrooms.index'));
    }

    /**
     * Remove the specified SisdeckClassroom from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckClassroom = $this->sisdeckClassroomRepository->find($id);

        if (empty($sisdeckClassroom)) {
            Flash::error('Classroom not found.');

            return redirect(route('sisdeck.classrooms.index'));
        }

        $this->sisdeckClassroomRepository->delete($id);

        Flash::success('Classroom deleted successfully.');

        return redirect(route('sisdeck.classrooms.index'));
    }
}