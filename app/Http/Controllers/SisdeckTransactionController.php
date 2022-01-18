<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckTransactionRequest;
use App\Http\Requests\UpdateSisdeckTransactionRequest;
use App\Repositories\SisdeckTransactionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckTransactionController extends AppBaseController
{
    /** @var  SisdeckTransactionRepository */
    private $sisdeckTransactionRepository;

    public function __construct(SisdeckTransactionRepository $sisdeckTransactionRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckTransactionRepository = $sisdeckTransactionRepo;
    }

    /**
     * Display a listing of the SisdeckTransaction.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckTransactions = $this->sisdeckTransactionRepository->all();

        return view('sisdeck/transactions/index')
            ->with('sisdeckTransactions', $sisdeckTransactions);
    }

    /**
     * Show the form for creating a new SisdeckTransaction.
     *
     * @return Response
     */
    public function create()
    {
        return view('sisdeck/transactions/create');
    }

    /**
     * Store a newly created SisdeckTransaction in storage.
     *
     * @param CreateSisdeckTransactionRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckTransactionRequest $request)
    {
        $input = $request->all();

        $sisdeckTransaction = $this->sisdeckTransactionRepository->create($input);

        Flash::success('Transaction saved successfully.');

        return redirect(route('sisdeck.transactions.index'));
    }

    /**
     * Display the specified SisdeckTransaction.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckTransaction = $this->sisdeckTransactionRepository->find($id);

        if (empty($sisdeckTransaction)) {
            Flash::error('Transaction not found.');

            return redirect(route('sisdeck.transactions.index'));
        }

        return view('sisdeck/transactions/show')->with('sisdeckTransaction', $sisdeckTransaction);
    }

    /**
     * Show the form for editing the specified SisdeckTransaction.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckTransaction = $this->sisdeckTransactionRepository->find($id);

        if (empty($sisdeckTransaction)) {
            Flash::error('Transaction not found.');

            return redirect(route('sisdeck.transactions.index'));
        }

        return view('sisdeck/transactions/edit')->with('sisdeckTransaction', $sisdeckTransaction);
    }

    /**
     * Update the specified SisdeckTransaction in storage.
     *
     * @param int $id
     * @param UpdateSisdeckTransactionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSisdeckTransactionRequest $request)
    {
        $sisdeckTransaction = $this->sisdeckTransactionRepository->find($id);

        if (empty($sisdeckTransaction)) {
            Flash::error('Transaction not found.');

            return redirect(route('sisdeck.transactions.index'));
        }

        $sisdeckTransaction = $this->sisdeckTransactionRepository->update($request->all(), $id);

        Flash::success('Transaction updated successfully.');

        return redirect(route('sisdeck.transactions.index'));
    }

    /**
     * Remove the specified SisdeckTransaction from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckTransaction = $this->sisdeckTransactionRepository->find($id);

        if (empty($sisdeckTransaction)) {
            Flash::error('Transaction not found.');

            return redirect(route('sisdeck.transactions.index'));
        }

        $this->sisdeckTransactionRepository->delete($id);

        Flash::success('Transaction deleted successfully.');

        return redirect(route('sisdeck.transactions.index'));
    }
}
