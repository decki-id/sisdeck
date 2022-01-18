<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckAttendanceRequest;
use App\Http\Requests\UpdateSisdeckAttendanceRequest;
use App\Repositories\SisdeckAttendanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckAttendanceController extends AppBaseController
{
    /** @var  SisdeckAttendanceRepository */
    private $sisdeckAttendanceRepository;

    public function __construct(SisdeckAttendanceRepository $sisdeckAttendanceRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckAttendanceRepository = $sisdeckAttendanceRepo;
    }

    /**
     * Display a listing of the SisdeckAttendance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckAttendances = $this->sisdeckAttendanceRepository->all();

        return view('/sisdeck/attendances/index')
            ->with('sisdeckAttendances', $sisdeckAttendances);
    }

    /**
     * Show the form for creating a new SisdeckAttendance.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/attendances/create');
    }

    /**
     * Store a newly created SisdeckAttendance in storage.
     *
     * @param CreateSisdeckAttendanceRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckAttendanceRequest $request)
    {
        $input = $request->all();

        $sisdeckAttendance = $this->sisdeckAttendanceRepository->create($input);

        Flash::success('Attendance saved successfully.');

        return redirect(route('sisdeck.attendances.index'));
    }

    /**
     * Display the specified SisdeckAttendance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckAttendance = $this->sisdeckAttendanceRepository->find($id);

        if (empty($sisdeckAttendance)) {
            Flash::error('Attendance not found.');

            return redirect(route('sisdeck.attendances.index'));
        }

        return view('/sisdeck/attendances/show')->with('sisdeckAttendance', $sisdeckAttendance);
    }

    /**
     * Show the form for editing the specified SisdeckAttendance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckAttendance = $this->sisdeckAttendanceRepository->find($id);

        if (empty($sisdeckAttendance)) {
            Flash::error('Attendance not found.');

            return redirect(route('sisdeck.attendances.index'));
        }

        return view('/sisdeck/attendances/edit')->with('sisdeckAttendance', $sisdeckAttendance);
    }

    /**
     * Update the specified SisdeckAttendance in storage.
     *
     * @param int $id
     * @param UpdateSisdeckAttendanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckAttendanceRequest $request)
    {
        $sisdeckAttendance = $this->sisdeckAttendanceRepository->find($id);

        if (empty($sisdeckAttendance)) {
            Flash::error('Attendance not found.');

            return redirect(route('sisdeck.attendances.index'));
        }

        $sisdeckAttendance = $this->sisdeckAttendanceRepository->update($request->all(), $id);

        Flash::success('Attendance updated successfully.');

        return redirect(route('sisdeck.attendances.index'));
    }

    /**
     * Remove the specified SisdeckAttendance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckAttendance = $this->sisdeckAttendanceRepository->find($id);

        if (empty($sisdeckAttendance)) {
            Flash::error('Attendance not found.');

            return redirect(route('sisdeck.attendances.index'));
        }

        $this->sisdeckAttendanceRepository->delete($id);

        Flash::success('Attendance deleted successfully.');

        return redirect(route('sisdeck.attendances.index'));
    }
}
