<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckClassAssignmentRequest;
use App\Http\Requests\UpdateSisdeckClassAssignmentRequest;
use App\Repositories\SisdeckClassAssignmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckClassAssignmentController extends AppBaseController
{
    /** @var  SisdeckClassAssignmentRepository */
    private $sisdeckClassAssignmentRepository;

    public function __construct(SisdeckClassAssignmentRepository $sisdeckClassAssignmentRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckClassAssignmentRepository = $sisdeckClassAssignmentRepo;
    }

    /**
     * Display a listing of the SisdeckClassAssignment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckClassAssignments = $this->sisdeckClassAssignmentRepository->all();

        return view('sisdeck/class_assignments/index')->with('sisdeckClassAssignments', $sisdeckClassAssignments);
    }

    /**
     * Show the form for creating a new SisdeckClassAssignment.
     *
     * @return Response
     */
    public function create()
    {
        return view('sisdeck/class_assignments/create');
    }

    /**
     * Store a newly created SisdeckClassAssignment in storage.
     *
     * @param CreateSisdeckClassAssignmentRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckClassAssignmentRequest $request)
    {
        $input = $request->all();

        $sisdeckClassAssignment = $this->sisdeckClassAssignmentRepository->create($input);

        Flash::success('Class Assignment saved successfully.');

        return redirect(route('sisdeck.class_assignments.index'));
    }

    /**
     * Display the specified SisdeckClassAssignment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckClassAssignment = $this->sisdeckClassAssignmentRepository->find($id);

        if (empty($sisdeckClassAssignment)) {
            Flash::error('Class Assignment not found.');

            return redirect(route('sisdeck.class_assignments.index'));
        }

        return view('sisdeck/class_assignments/show')->with('sisdeckClassAssignment', $sisdeckClassAssignment);
    }

    /**
     * Show the form for editing the specified SisdeckClassAssignment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckClassAssignment = $this->sisdeckClassAssignmentRepository->find($id);

        if (empty($sisdeckClassAssignment)) {
            Flash::error('Class Assignment not found.');

            return redirect(route('sisdeck.class_assignments.index'));
        }

        return view('sisdeck/class_assignments/edit')->with('sisdeckClassAssignment', $sisdeckClassAssignment);
    }

    /**
     * Update the specified SisdeckClassAssignment in storage.
     *
     * @param int $id
     * @param UpdateSisdeckClassAssignmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckClassAssignmentRequest $request)
    {
        $sisdeckClassAssignment = $this->sisdeckClassAssignmentRepository->find($id);

        if (empty($sisdeckClassAssignment)) {
            Flash::error('Class Assignment not found.');

            return redirect(route('sisdeck.class_assignments.index'));
        }

        $sisdeckClassAssignment = $this->sisdeckClassAssignmentRepository->update($request->all(), $id);

        Flash::success('Class Assignment updated successfully.');

        return redirect(route('sisdeck.class_assignments.index'));
    }

    /**
     * Remove the specified SisdeckClassAssignment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckClassAssignment = $this->sisdeckClassAssignmentRepository->find($id);

        if (empty($sisdeckClassAssignment)) {
            Flash::error('Class Assignment not found.');

            return redirect(route('sisdeck.class_assignments.index'));
        }

        $this->sisdeckClassAssignmentRepository->delete($id);

        Flash::success('Class Assignment deleted successfully.');

        return redirect(route('sisdeck.class_assignments.index'));
    }
}