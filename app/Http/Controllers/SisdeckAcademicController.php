<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckAcademicRequest;
use App\Http\Requests\UpdateSisdeckAcademicRequest;
use App\Repositories\SisdeckAcademicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckAcademicController extends AppBaseController
{
    /** @var  SisdeckAcademicRepository */
    private $sisdeckAcademicRepository;

    public function __construct(SisdeckAcademicRepository $sisdeckAcademicRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckAcademicRepository = $sisdeckAcademicRepo;
    }

    /**
     * Display a listing of the SisdeckAcademic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckAcademics = $this->sisdeckAcademicRepository->all();

        return view('/sisdeck/academics/index')
            ->with('sisdeckAcademics', $sisdeckAcademics);
    }

    /**
     * Show the form for creating a new SisdeckAcademic.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/academics/create');
    }

    /**
     * Store a newly created SisdeckAcademic in storage.
     *
     * @param CreateSisdeckAcademicRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckAcademicRequest $request)
    {
        $input = $request->all();

        $sisdeckAcademic = $this->sisdeckAcademicRepository->create($input);

        Flash::success('Academic saved successfully.');

        return redirect(route('sisdeck.academics.index'));
    }

    /**
     * Display the specified SisdeckAcademic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckAcademic = $this->sisdeckAcademicRepository->find($id);

        if (empty($sisdeckAcademic)) {
            Flash::error('Academic not found.');

            return redirect(route('sisdeck.academics.index'));
        }

        return view('/sisdeck/academics/show')->with('sisdeckAcademic', $sisdeckAcademic);
    }

    /**
     * Show the form for editing the specified SisdeckAcademic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckAcademic = $this->sisdeckAcademicRepository->find($id);

        if (empty($sisdeckAcademic)) {
            Flash::error('Academic not found.');

            return redirect(route('sisdeck.academics.index'));
        }

        return view('/sisdeck/academics/edit')->with('sisdeckAcademic', $sisdeckAcademic);
    }

    /**
     * Update the specified SisdeckAcademic in storage.
     *
     * @param int $id
     * @param UpdateSisdeckAcademicRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckAcademicRequest $request)
    {
        $sisdeckAcademic = $this->sisdeckAcademicRepository->find($request->id);

        if (empty($sisdeckAcademic)) {
            Flash::error('Academic not found.');

            return redirect(route('sisdeck.academics.index'));
        }

        $sisdeckAcademic = $this->sisdeckAcademicRepository->update($request->all(), $request->id);

        Flash::success('Academic updated successfully.');

        return redirect(route('sisdeck.academics.index'));
    }

    /**
     * Remove the specified SisdeckAcademic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckAcademic = $this->sisdeckAcademicRepository->find($id);

        if (empty($sisdeckAcademic)) {
            Flash::error('Academic not found.');

            return redirect(route('sisdeck.academics.index'));
        }

        $this->sisdeckAcademicRepository->delete($id);

        Flash::success('Academic deleted successfully.');

        return redirect(route('sisdeck.academics.index'));
    }
}
