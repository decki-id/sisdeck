<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckBatchRequest;
use App\Http\Requests\UpdateSisdeckBatchRequest;
use App\Repositories\SisdeckBatchRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckBatchController extends AppBaseController
{
    /** @var  SisdeckBatchRepository */
    private $sisdeckBatchRepository;

    public function __construct(SisdeckBatchRepository $sisdeckBatchRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckBatchRepository = $sisdeckBatchRepo;
    }

    /**
     * Display a listing of the SisdeckBatch.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckBatches = $this->sisdeckBatchRepository->all();

        return view('/sisdeck/batches/index')
            ->with('sisdeckBatches', $sisdeckBatches);
    }

    /**
     * Show the form for creating a new SisdeckBatch.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/batches/create');
    }

    /**
     * Store a newly created SisdeckBatch in storage.
     *
     * @param CreateSisdeckBatchRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckBatchRequest $request)
    {
        $input = $request->all();

        $sisdeckBatch = $this->sisdeckBatchRepository->create($input);

        Flash::success('Batch saved successfully.');

        return redirect(route('sisdeck.batches.index'));
    }

    /**
     * Display the specified SisdeckBatch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckBatch = $this->sisdeckBatchRepository->find($id);

        if (empty($sisdeckBatch)) {
            Flash::error('Batch not found.');

            return redirect(route('sisdeck.batches.index'));
        }

        return view('/sisdeck/batches/show')->with('sisdeckBatch', $sisdeckBatch);
    }

    /**
     * Show the form for editing the specified SisdeckBatch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckBatch = $this->sisdeckBatchRepository->find($id);

        if (empty($sisdeckBatch)) {
            Flash::error('Batch not found.');

            return redirect(route('sisdeck.batches.index'));
        }

        return view('/sisdeck/batches/edit')->with('sisdeckBatch', $sisdeckBatch);
    }

    /**
     * Update the specified SisdeckBatch in storage.
     *
     * @param int $id
     * @param UpdateSisdeckBatchRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckBatchRequest $request)
    {
        $sisdeckBatch = $this->sisdeckBatchRepository->find($request->batch_id);

        if (empty($sisdeckBatch)) {
            Flash::error('Batch not found.');

            return redirect(route('sisdeck.batches.index'));
        }

        $sisdeckBatch = $this->sisdeckBatchRepository->update($request->all(), $request->batch_id);

        Flash::success('Batch updated successfully.');

        return redirect(route('sisdeck.batches.index'));
    }

    /**
     * Remove the specified SisdeckBatch from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckBatch = $this->sisdeckBatchRepository->find($id);

        if (empty($sisdeckBatch)) {
            Flash::error('Batch not found.');

            return redirect(route('sisdeck.batches.index'));
        }

        $this->sisdeckBatchRepository->delete($id);

        Flash::success('Batch deleted successfully.');

        return redirect(route('sisdeck.batches.index'));
    }
}
