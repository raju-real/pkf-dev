<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\JobDepartment;
use App\Http\Controllers\Controller;

class JobDepartmentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = JobDepartment::latest()->paginate(50);
        return view('admin.career.department_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route = route('admin.job-departments.store');
        return view('admin.career.department_add_edit',compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'description' => 'nullable|sometimes|string|max:300'
        ]);

        $row = new JobDepartment();
        $row->name = $request->name;
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.job-departments.index')->with(savedMessage());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = JobDepartment::findOrFail($id);
        $route = route('admin.job-departments.update',$id);
        return view('admin.career.department_add_edit',compact('data','route'));
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
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'description' => 'nullable|sometimes|string|max:300'
        ]);

        $row = JobDepartment::findOrFail($id);
        $row->name = $request->name;
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.job-departments.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobDepartment::findOrFail($id)->delete();
        return redirect()->route('admin.job-departments.index')->with(deleteMessage());
    }
}
