<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckClassRequest;
use App\Http\Requests\UpdateSisdeckClassRequest;
use App\Repositories\SisdeckClassRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckClassController extends AppBaseController
{
    /** @var  SisdeckClassRepository */
    private $sisdeckClassRepository;

    public function __construct(SisdeckClassRepository $sisdeckClassRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckClassRepository = $sisdeckClassRepo;
    }

    /**
     * Display a listing of the SisdeckClasses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckClasses = $this->sisdeckClassRepository->all();

        return view('/sisdeck/classes/index')->with('sisdeckClasses', $sisdeckClasses);
    }

    /**
     * Show the form for creating a new SisdeckClass.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/classes/create');
    }

    /**
     * Store a newly created SisdeckClass in storage.
     *
     * @param CreateSisdeckClassRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckClassRequest $request)
    {
        $input = $request->all();
        $input['class_name'] = ucwords(strtolower($input['class_name']));

        $sisdeckClass = $this->sisdeckClassRepository->create($input);

        Flash::success('Class saved successfully.');

        return redirect(route('sisdeck.classes.index'));
    }

    /**
     * Display the specified SisdeckClass.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisdeckClass = $this->sisdeckClassRepository->find($id);

        if (empty($sisdeckClass)) {
            Flash::error('Class not found.');

            return redirect(route('sisdeck.classes.index'));
        }

        return view('/sisdeck/classes/show')->with('sisdeckClass', $sisdeckClass);
    }

    /**
     * Show the form for editing the specified SisdeckClass.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisdeckClass = $this->sisdeckClassRepository->find($id);

        if (empty($sisdeckClass)) {
            Flash::error('Class not found.');

            return redirect(route('sisdeck.classes.index'));
        }

        return view('/sisdeck/classes/edit')->with('sisdeckClass', $sisdeckClass);
    }

    /**
     * Update the specified SisdeckClass in storage.
     *
     * @param int $id
     * @param UpdateSisdeckClassRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckClassRequest $request)
    {
        $sisdeckClass = $this->sisdeckClassRepository->find($request->class_id);

        if (empty($sisdeckClass)) {
            Flash::error('Class not found.');

            return redirect(route('sisdeck.classes.index'));
        }

        $input = $request->all();
        $input['class_name'] = ucwords(strtolower($input['class_name']));

        $sisdeckClass = $this->sisdeckClassRepository->update($input, $request->class_id);

        Flash::success('Class updated successfully.');

        return redirect(route('sisdeck.classes.index'));
    }

    /**
     * Remove the specified SisdeckClass from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisdeckClass = $this->sisdeckClassRepository->find($id);

        if (empty($sisdeckClass)) {
            Flash::error('Class not found.');

            return redirect(route('sisdeck.classes.index'));
        }

        $this->sisdeckClassRepository->delete($id);

        Flash::success('Class deleted successfully.');

        return redirect(route('sisdeck.classes.index'));
    }
}