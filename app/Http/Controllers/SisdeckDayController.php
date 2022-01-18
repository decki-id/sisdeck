<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckDayRequest;
use App\Http\Requests\UpdateSisdeckDayRequest;
use App\Repositories\SisdeckDayRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckDayController extends AppBaseController
{
    /** @var  SisdeckDayRepository */
    private $sisdeckDayRepository;

    public function __construct(SisdeckDayRepository $sisdeckDayRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckDayRepository = $sisdeckDayRepo;
    }

    /**
     * Display a listing of the SisdeckDay.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckDays = $this->sisdeckDayRepository->all();

        return view('/sisdeck/days/index')
            ->with('sisdeckDays', $sisdeckDays);
    }

    /**
     * Show the form for creating a new SisdeckDay.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/days/create');
    }

    /**
     * Store a newly created SisdeckDay in storage.
     *
     * @param CreateSisdeckDayRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckDayRequest $request)
    {
        $input = $request->all();

        $sisdeckDay = $this->sisdeckDayRepository->create($input);

        Flash::success('Day saved successfully.');

        return redirect(route('sisdeck.days.index'));
    }

    /**
     * Display the specified SisdeckDay.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckDay = $this->sisdeckDayRepository->find($id);

        if (empty($sisdeckDay)) {
            Flash::error('Day not found.');

            return redirect(route('sisdeck.days.index'));
        }

        return view('/sisdeck/days/show')->with('sisdeckDay', $sisdeckDay);
    }

    /**
     * Show the form for editing the specified SisdeckDay.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckDay = $this->sisdeckDayRepository->find($id);

        if (empty($sisdeckDay)) {
            Flash::error('Day not found.');

            return redirect(route('sisdeck.days.index'));
        }

        return view('/sisdeck/days/edit')->with('sisdeckDay', $sisdeckDay);
    }

    /**
     * Update the specified SisdeckDay in storage.
     *
     * @param int $id
     * @param UpdateSisdeckDayRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckDayRequest $request)
    {
        $sisdeckDay = $this->sisdeckDayRepository->find($request->id);

        if (empty($sisdeckDay)) {
            Flash::error('Day not found.');

            return redirect(route('sisdeck.days.index'));
        }

        $sisdeckDay = $this->sisdeckDayRepository->update($request->all(), $request->id);

        Flash::success('Day updated successfully.');

        return redirect(route('sisdeck.days.index'));
    }

    /**
     * Remove the specified SisdeckDay from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckDay = $this->sisdeckDayRepository->find($id);

        if (empty($sisdeckDay)) {
            Flash::error('Day not found.');

            return redirect(route('sisdeck.days.index'));
        }

        $this->sisdeckDayRepository->delete($id);

        Flash::success('Day deleted successfully.');

        return redirect(route('sisdeck.days.index'));
    }
}
