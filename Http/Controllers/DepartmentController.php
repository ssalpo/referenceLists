<?php namespace Larapage\Modules\ReferenceLists\Http\Controllers;

use Larapage\Modules\ReferenceLists\Repositories\Departments\DepartmentInterface;
use Illuminate\Http\Request;
use Larapage\System\Http\Controllers\BaseController;

class DepartmentController extends BaseController
{
    public function __construct(DepartmentInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a list of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = $this->repository->all();

        return view('referenceLists::departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new department.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referenceLists::departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = $this->repository->create($request->all());
        return redirect()->route('referenceLists.departments.index')->with('success', trans('referenceLists::departments.alerts.success.created', ['department' => $department['name']]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($department = $this->repository->find($id))
            return view('referenceLists::departments.edit', compact('department'));
        else
            return redirect()->route('referenceLists.departments.index');
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
        $department = $this->repository->update($request->all(), $id);

        return redirect()->route('referenceLists.departments.index')->with('success', trans('referenceLists::departments.alerts.success.updated', ['department' => $request->get('name')]));
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

        return redirect()->route('referenceLists.departments.index')->with("success", trans('referenceLists::departments.alerts.success.deleted'));
    }
}
