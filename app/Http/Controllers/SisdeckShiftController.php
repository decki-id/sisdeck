<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckShiftRequest;
use App\Http\Requests\UpdateSisdeckShiftRequest;
use App\Repositories\SisdeckShiftRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckShiftController extends AppBaseController
{
    /** @var  SisdeckShiftRepository */
    private $sisdeckShiftRepository;

    public function __construct(SisdeckShiftRepository $sisdeckShiftRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckShiftRepository = $sisdeckShiftRepo;
    }

    /**
     * Display a listing of the SisdeckShift.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckShifts = $this->sisdeckShiftRepository->all();

        return view('/sisdeck/shifts/index')
            ->with('sisdeckShifts', $sisdeckShifts);
    }

    /**
     * Show the form for creating a new SisdeckShift.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/shifts/create');
    }

    /**
     * Store a newly created SisdeckShift in storage.
     *
     * @param CreateSisdeckShiftRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckShiftRequest $request)
    {
        $input = $request->all();

        $sisdeckShift = $this->sisdeckShiftRepository->create($input);

        Flash::success('Shift saved successfully.');

        return redirect(route('sisdeck.shifts.index'));
    }

    /**
     * Display the specified SisdeckShift.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckShift = $this->sisdeckShiftRepository->find($id);

        if (empty($sisdeckShift)) {
            Flash::error('Shift not found.');

            return redirect(route('sisdeck.shifts.index'));
        }

        return view('/sisdeck/shifts/show')->with('sisdeckShift', $sisdeckShift);
    }

    /**
     * Show the form for editing the specified SisdeckShift.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckShift = $this->sisdeckShiftRepository->find($id);

        if (empty($sisdeckShift)) {
            Flash::error('Shift not found.');

            return redirect(route('sisdeck.shifts.index'));
        }

        return view('/sisdeck/shifts/edit')->with('sisdeckShift', $sisdeckShift);
    }

    /**
     * Update the specified SisdeckShift in storage.
     *
     * @param int $id
     * @param UpdateSisdeckShiftRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckShiftRequest $request)
    {
        $sisdeckShift = $this->sisdeckShiftRepository->find($id);

        if (empty($sisdeckShift)) {
            Flash::error('Shift not found.');

            return redirect(route('sisdeck.shifts.index'));
        }

        $sisdeckShift = $this->sisdeckShiftRepository->update($request->all(), $id);

        Flash::success('Shift updated successfully.');

        return redirect(route('sisdeck.shifts.index'));
    }

    /**
     * Remove the specified SisdeckShift from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckShift = $this->sisdeckShiftRepository->find($id);

        if (empty($sisdeckShift)) {
            Flash::error('Shift not found.');

            return redirect(route('sisdeck.shifts.index'));
        }

        $this->sisdeckShiftRepository->delete($id);

        Flash::success('Shift deleted successfully.');

        return redirect(route('sisdeck.shifts.index'));
    }
}
