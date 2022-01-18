<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckCourseRequest;
use App\Http\Requests\UpdateSisdeckCourseRequest;
use App\Repositories\SisdeckCourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckCourseController extends AppBaseController
{
    /** @var  SisdeckCourseRepository */
    private $sisdeckCourseRepository;

    public function __construct(SisdeckCourseRepository $sisdeckCourseRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckCourseRepository = $sisdeckCourseRepo;
    }

    /**
     * Display a listing of the SisdeckCourse.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckCourses = $this->sisdeckCourseRepository->all();

        return view('/sisdeck/courses/index')->with('sisdeckCourses', $sisdeckCourses);
    }

    /**
     * Show the form for creating a new SisdeckCourse.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/courses/create');
    }

    /**
     * Store a newly created SisdeckCourse in storage.
     *
     * @param CreateSisdeckCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckCourseRequest $request)
    {
        $input = $request->all();
        $input['course_name'] = ucwords(strtolower($input['course_name']));
        $input['course_description'] = ucfirst(strtolower($input['course_description']));

        $sisdeckCourse = $this->sisdeckCourseRepository->create($input);

        Flash::success('Course saved successfully.');

        return redirect(route('sisdeck.courses.index'));
    }

    /**
     * Display the specified SisdeckCourse.
     *
     * @param int $course_id
     *
     * @return Response
     */
    public function show($course_id)
    {
        $sisdeckCourse = $this->sisdeckCourseRepository->find($course_id);

        if (empty($sisdeckCourse)) {
            Flash::error('Course not found.');

            return redirect(route('sisdeck.courses.index'));
        }

        return view('/sisdeck/courses/show')->with('sisdeckCourse', $sisdeckCourse);
    }

    /**
     * Show the form for editing the specified SisdeckCourse.
     *
     * @param int $course_id
     *
     * @return Response
     */
    public function edit($course_id)
    {
        $sisdeckCourse = $this->sisdeckCourseRepository->find($course_id);

        if (empty($sisdeckCourse)) {
            Flash::error('Course not found.');

            return redirect(route('sisdeck.courses.index'));
        }

        return view('/sisdeck/courses/edit')->with('sisdeckCourse', $sisdeckCourse);
    }

    /**
     * Update the specified SisdeckCourse in storage.
     *
     * @param int $course_id
     * @param UpdateSisdeckCourseRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckCourseRequest $request)
    {
        $sisdeckCourse = $this->sisdeckCourseRepository->find($request->course_id);

        if (empty($sisdeckCourse)) {
            Flash::error('Course not found.');

            return redirect(route('sisdeck.courses.index'));
        }

        $input = $request->all();
        $input['course_name'] = ucwords(strtolower($input['course_name']));
        $input['course_description'] = ucfirst(strtolower($input['course_description']));

        $sisdeckCourse = $this->sisdeckCourseRepository->update($input, $request->course_id);

        Flash::success('Course updated successfully.');

        return redirect(route('sisdeck.courses.index'));
    }

    /**
     * Remove the specified SisdeckCourse from storage.
     *
     * @param int $course_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($course_id)
    {
        $sisdeckCourse = $this->sisdeckCourseRepository->find($course_id);

        if (empty($sisdeckCourse)) {
            Flash::error('Course not found.');

            return redirect(route('sisdeck.courses.index'));
        }

        $this->sisdeckCourseRepository->delete($course_id);

        Flash::success('Course deleted successfully.');

        return redirect(route('sisdeck.courses.index'));
    }
}