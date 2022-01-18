<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSisdeckRoleRequest;
use App\Http\Requests\UpdateSisdeckRoleRequest;
use App\Repositories\SisdeckRoleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SisdeckRoleController extends AppBaseController
{
    /** @var  SisdeckRoleRepository */
    private $sisdeckRoleRepository;

    public function __construct(SisdeckRoleRepository $sisdeckRoleRepo)
    {
        $this->middleware('sisdeck.auth');
        $this->sisdeckRoleRepository = $sisdeckRoleRepo;
    }

    /**
     * Display a listing of the SisdeckRole.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sisdeckRoles = $this->sisdeckRoleRepository->all();

        return view('/sisdeck/roles/index')->with('sisdeckRoles', $sisdeckRoles);
    }

    /**
     * Show the form for creating a new SisdeckRole.
     *
     * @return Response
     */
    public function create()
    {
        return view('/sisdeck/roles/create');
    }

    /**
     * Store a newly created SisdeckRole in storage.
     *
     * @param CreateSisdeckRoleRequest $request
     *
     * @return Response
     */
    public function store(CreateSisdeckRoleRequest $request)
    {
        $input = $request->all();
        $input['role_name'] = ucwords(strtolower($input['role_name']));

        $sisdeckRole = $this->sisdeckRoleRepository->create($input);

        Flash::success('Role saved successfully.');

        return redirect(route('sisdeck.roles.index'));
    }

    /**
     * Display the specified SisdeckRole.
     *
     * @param int $role_id
     *
     * @return Response
     */
    public function show($role_id)
    {
        $sisdeckRole = $this->sisdeckRoleRepository->find($role_id);

        if (empty($sisdeckRole)) {
            Flash::error('Role not found.');

            return redirect(route('sisdeck.roles.index'));
        }

        return view('/sisdeck/roles/read')->with('sisdeckRole', $sisdeckRole);
    }

    /**
     * Show the form for editing the specified SisdeckRole.
     *
     * @param int $role_id
     *
     * @return Response
     */
    public function edit($role_id)
    {
        $sisdeckRole = $this->sisdeckRoleRepository->find($role_id);

        if (empty($sisdeckRole)) {
            Flash::error('Role not found.');

            return redirect(route('sisdeck.roles.index'));
        }

        return view('/sisdeck/roles/update')->with('sisdeckRole', $sisdeckRole);
    }

    /**
     * Update the specified SisdeckRole in storage.
     *
     * @param int $role_id
     * @param UpdateSisdeckRoleRequest $request
     *
     * @return Response
     */
    public function update(UpdateSisdeckRoleRequest $request)
    {
        $sisdeckRole = $this->sisdeckRoleRepository->find($request->role_id);

        if (empty($sisdeckRole)) {
            Flash::error('Role not found.');

            return redirect(route('sisdeck.roles.index'));
        }

        $input = $request->all();
        $input['role_name'] = ucwords(strtolower($input['role_name']));

        $sisdeckRole = $this->sisdeckRoleRepository->update($input, $request->role_id);

        Flash::success('Role updated successfully.');

        return redirect(route('sisdeck.roles.index'));
    }

    /**
     * Remove the specified SisdeckRole from storage.
     *
     * @param int $role_id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($role_id)
    {
        $sisdeckRole = $this->sisdeckRoleRepository->find($role_id);

        if (empty($sisdeckRole)) {
            Flash::error('Role not found.');

            return redirect(route('sisdeck.roles.index'));
        }

        $this->sisdeckRoleRepository->delete($role_id);

        Flash::success('Role deleted successfully.');

        return redirect(route('sisdeck.roles.index'));
    }
}
