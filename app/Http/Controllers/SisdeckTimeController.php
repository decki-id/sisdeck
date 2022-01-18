<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckTimeRequest;
use App\Http\Requests\UpdateSisdeckTimeRequest;
use App\Repositories\SisdeckTimeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckTimeController extends AppBaseController
{
    /** @var  SisdeckTimeRepository */
    private $sisdeckTimeRepository;

    public function __construct(SisdeckTimeRepository $sisdeckTimeRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckTimeRepository = $sisdeckTimeRepo;
    }

    /**
     * Display a listing of the SisdeckTime.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckTimes = $this->sisdeckTimeRepository->all();

        return view('/sisdeck/times/index')
            ->with('sisdeckTimes', $sisdeckTimes);
    }

    /**
     * Show the form for creating a new SisdeckTime.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/times/create');
    }

    /**
     * Store a newly created SisdeckTime in storage.
     *
     * @param CreateSisdeckTimeRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckTimeRequest $request)
    {
        $input = $request->all();

        $sisdeckTime = $this->sisdeckTimeRepository->create($input);

        Flash::success('Time saved successfully.');

        return redirect(route('sisdeck.times.index'));
    }

    /**
     * Display the specified SisdeckTime.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckTime = $this->sisdeckTimeRepository->find($id);

        if (empty($sisdeckTime)) {
            Flash::error('Time not found.');

            return redirect(route('sisdeck.times.index'));
        }

        return view('/sisdeck/times/show')->with('sisdeckTime', $sisdeckTime);
    }

    /**
     * Show the form for editing the specified SisdeckTime.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckTime = $this->sisdeckTimeRepository->find($id);

        if (empty($sisdeckTime)) {
            Flash::error('Time not found.');

            return redirect(route('sisdeck.times.index'));
        }

        return view('/sisdeck/times/edit')->with('sisdeckTime', $sisdeckTime);
    }

    /**
     * Update the specified SisdeckTime in storage.
     *
     * @param int $id
     * @param UpdateSisdeckTimeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckTimeRequest $request)
    {
        $sisdeckTime = $this->sisdeckTimeRepository->find($id);

        if (empty($sisdeckTime)) {
            Flash::error('Time not found.');

            return redirect(route('sisdeck.times.index'));
        }

        $sisdeckTime = $this->sisdeckTimeRepository->update($request->all(), $id);

        Flash::success('Time updated successfully.');

        return redirect(route('sisdeck.times.index'));
    }

    /**
     * Remove the specified SisdeckTime from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckTime = $this->sisdeckTimeRepository->find($id);

        if (empty($sisdeckTime)) {
            Flash::error('Time not found.');

            return redirect(route('sisdeck.times.index'));
        }

        $this->sisdeckTimeRepository->delete($id);

        Flash::success('Time deleted successfully.');

        return redirect(route('sisdeck.times.index'));
    }
}
