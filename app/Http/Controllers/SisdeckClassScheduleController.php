<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckClassScheduleRequest;
use App\Http\Requests\UpdateSisdeckClassScheduleRequest;
use App\Repositories\SisdeckClassScheduleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\SisdeckCourse;
use App\Models\SisdeckClass;
use App\Models\SisdeckLevel;
use App\Models\SisdeckShift;
use App\Models\SisdeckClassroom;
use App\Models\SisdeckSemester;
use App\Models\SisdeckBatch;
use App\Models\SisdeckDay;
use App\Models\SisdeckTime;
use Flash;
use Response;

class SisdeckClassScheduleController extends AppBaseController
{
    /** @var  SisdeckClassScheduleRepository */
    private $sisdeckClassScheduleRepository;

    public function __construct(SisdeckClassScheduleRepository $sisdeckClassScheduleRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckClassScheduleRepository = $sisdeckClassScheduleRepo;
    }

    /**
     * Display a listing of the SisdeckClassSchedule.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckClassSchedules = $this->sisdeckClassScheduleRepository->all();
        $course = SisdeckCourse::pluck('course_name', 'course_id');
        $class = SisdeckClass::pluck('class_name', 'class_id');
        $level = SisdeckLevel::pluck('level', 'id');
        $shift = SisdeckShift::pluck('shift', 'id');
        $classroom = SisdeckClassroom::pluck('name', 'id');
        $semester = SisdeckSemester::pluck('name', 'id');
        $batch = SisdeckBatch::pluck('year', 'batch_id');
        $day = SisdeckDay::pluck('day', 'id');
        $time = SisdeckTime::pluck('time', 'id');

        return view('sisdeck/class_schedules/index', compact('sisdeckClassSchedules', 'course', 'class', 'level', 'shift', 'classroom', 'semester', 'batch', 'day', 'time'));
    }

    /**
     * Show the form for creating a new SisdeckClassSchedule.
     *
     * @return Response
     */
    public function create()
    {
        return view('sisdeck/class_schedules/create');
    }

    /**
     * Store a newly created SisdeckClassSchedule in storage.
     *
     * @param CreateSisdeckClassScheduleRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckClassScheduleRequest $request)
    {
        $input = $request->all();

        $sisdeckClassSchedule = $this->sisdeckClassScheduleRepository->create($input);

        Flash::success('Class Schedule saved successfully.');

        return redirect(route('sisdeck.class_schedules.index'));
    }

    /**
     * Display the specified SisdeckClassSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckClassSchedule = $this->sisdeckClassScheduleRepository->find($id);

        if (empty($sisdeckClassSchedule)) {
            Flash::error('Class Schedule not found.');

            return redirect(route('sisdeck.class_schedules.index'));
        }

        return view('sisdeck/class_schedules/show')->with('sisdeckClassSchedule', $sisdeckClassSchedule);
    }

    /**
     * Show the form for editing the specified SisdeckClassSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckClassSchedule = $this->sisdeckClassScheduleRepository->find($id);

        if (empty($sisdeckClassSchedule)) {
            Flash::error('Class Schedule not found.');

            return redirect(route('sisdeck.class_schedules.index'));
        }

        return view('sisdeck/class_schedules/edit')->with('sisdeckClassSchedule', $sisdeckClassSchedule);
    }

    /**
     * Update the specified SisdeckClassSchedule in storage.
     *
     * @param int $id
     * @param UpdateSisdeckClassScheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckClassScheduleRequest $request)
    {
        $sisdeckClassSchedule = $this->sisdeckClassScheduleRepository->find($id);

        if (empty($sisdeckClassSchedule)) {
            Flash::error('Class Schedule not found.');

            return redirect(route('sisdeck.class_schedules.index'));
        }

        $sisdeckClassSchedule = $this->sisdeckClassScheduleRepository->update($request->all(), $id);

        Flash::success('Class Schedule updated successfully.');

        return redirect(route('sisdeck.class_schedules.index'));
    }

    /**
     * Remove the specified SisdeckClassSchedule from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckClassSchedule = $this->sisdeckClassScheduleRepository->find($id);

        if (empty($sisdeckClassSchedule)) {
            Flash::error('Class Schedule not found.');

            return redirect(route('sisdeck.class_schedules.index'));
        }

        $this->sisdeckClassScheduleRepository->delete($id);

        Flash::success('Class Schedule deleted successfully.');

        return redirect(route('sisdeck.class_schedules.index'));
    }
}