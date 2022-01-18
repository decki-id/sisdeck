<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckLevelRequest;
use App\Http\Requests\UpdateSisdeckLevelRequest;
use App\Repositories\SisdeckLevelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckLevelController extends AppBaseController
{
    /** @var  SisdeckLevelRepository */
    private $sisdeckLevelRepository;

    public function __construct(SisdeckLevelRepository $sisdeckLevelRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckLevelRepository = $sisdeckLevelRepo;
    }

    /**
     * Display a listing of the SisdeckLevel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckLevels = $this->sisdeckLevelRepository->all();

        return view('/sisdeck/levels/index')
            ->with('sisdeckLevels', $sisdeckLevels);
    }

    /**
     * Show the form for creating a new SisdeckLevel.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/levels/create');
    }

    /**
     * Store a newly created SisdeckLevel in storage.
     *
     * @param CreateSisdeckLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckLevelRequest $request)
    {
        $input = $request->all();

        $sisdeckLevel = $this->sisdeckLevelRepository->create($input);

        Flash::success('Level saved successfully.');

        return redirect(route('sisdeck.levels.index'));
    }

    /**
     * Display the specified SisdeckLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckLevel = $this->sisdeckLevelRepository->find($id);

        if (empty($sisdeckLevel)) {
            Flash::error('Level not found.');

            return redirect(route('sisdeck.levels.index'));
        }

        return view('/sisdeck/levels/show')->with('sisdeckLevel', $sisdeckLevel);
    }

    /**
     * Show the form for editing the specified SisdeckLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckLevel = $this->sisdeckLevelRepository->find($id);

        if (empty($sisdeckLevel)) {
            Flash::error('Level not found.');

            return redirect(route('sisdeck.levels.index'));
        }

        return view('/sisdeck/levels/edit')->with('sisdeckLevel', $sisdeckLevel);
    }

    /**
     * Update the specified SisdeckLevel in storage.
     *
     * @param int $id
     * @param UpdateSisdeckLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckLevelRequest $request)
    {
        $sisdeckLevel = $this->sisdeckLevelRepository->find($id);

        if (empty($sisdeckLevel)) {
            Flash::error('Level not found.');

            return redirect(route('sisdeck.levels.index'));
        }

        $sisdeckLevel = $this->sisdeckLevelRepository->update($request->all(), $id);

        Flash::success('Level updated successfully.');

        return redirect(route('sisdeck.levels.index'));
    }

    /**
     * Remove the specified SisdeckLevel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckLevel = $this->sisdeckLevelRepository->find($id);

        if (empty($sisdeckLevel)) {
            Flash::error('Level not found.');

            return redirect(route('sisdeck.levels.index'));
        }

        $this->sisdeckLevelRepository->delete($id);

        Flash::success('Level deleted successfully.');

        return redirect(route('sisdeck.levels.index'));
    }
}