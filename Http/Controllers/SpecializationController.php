<?php namespace Larapage\Modules\ReferenceLists\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Larapage\Modules\ReferenceLists\Repositories\Departments\DepartmentInterface;
use Larapage\Modules\ReferenceLists\Repositories\Specializations\SpecializationInterface;
use Larapage\System\Http\Controllers\BaseController;

class SpecializationController extends BaseController
{
    protected $department;

    public function __construct(SpecializationInterface $repository, DepartmentInterface $department)
    {
        $this->repository = $repository;
        $this->department = $department;
    }

    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specializations = $this->repository->all(['department']);

        return view('referenceLists::specializations.index', compact('specializations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = $this->department->all();
        return view('referenceLists::specializations.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialization = $this->repository->create($request->all());
        return redirect()->route('referenceLists.specializations.index')->with('success', trans('referenceLists::specializations.alerts.success.created', ['specialization' => $specialization['name']]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialization = $this->repository->find($id);
        $departments = $this->department->all();
        return view('referenceLists::specializations.edit', compact('specialization', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $specialization = $this->repository->update($request->all(), $id);

        return redirect()->route('referenceLists.specializations.index')->with('success', trans('referenceLists::specializations.alerts.success.updated', ['specialization' => $request->get('name')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.specializations.index')->with("success", trans('referenceLists::specializations.alerts.success.deleted'));
    }
}
