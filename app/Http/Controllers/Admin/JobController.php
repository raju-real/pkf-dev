<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JobDepartment;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Job::latest()->paginate(10);
        return view('admin.career.job_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = JobDepartment::select('id','name')->orderBy('name')->get();
        $route = route('admin.jobs.store');
        return view('admin.career.job_add_edit',compact('route','departments'));
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
            'department' => 'required|exists:job_departments,id',
            'title' => 'required|string|max:191',
            'location' => 'required|string|max:255',
            'file' => 'nullable|sometimes|mimes:pdf|max:10240',
            'description' => 'required|string|max:10000',
            'status' => 'required|in:active,in-active'
        ]);

        $row = new Job();
        $row->department_id = $request->department;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        $row->location = $request->location;
        if($request->file('file')) {
            $row->file = uploadFile($request->file('file'),'assets/files/images/jobs/');
        }
        $row->description = $request->description;
        $row->status = $request->status;
        $row->save();
        return redirect()->route('admin.jobs.index')->with(savedMessage());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Job::whereSlug($slug)->firstOrFail();
        return view('admin.career.job_details',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = JobDepartment::select('id','name')->orderBy('name')->get();
        $data = Job::findOrFail($id);
        $route = route('admin.jobs.update',$id);
        return view('admin.career.job_add_edit',compact('data','route','departments'));
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
            'department' => 'required|exists:job_departments,id',
            'title' => 'required|string|max:191',
            'location' => 'required|string|max:255',
            'file' => 'nullable|sometimes|mimes:pdf|max:10240',
            'description' => 'required|string|max:10000',
            'status' => 'required|in:active,in-active'
        ]);

        $row = Job::findOrFail($id);
        $row->department_id = $request->department;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        $row->location = $request->location;
        if($request->file('file')) {
            $row->file = uploadFile($request->file('file'),'assets/files/images/jobs/');
        }
        $row->description = $request->description;
        $row->status = $request->status;
        $row->save();
        return redirect()->route('admin.jobs.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::findOrFail($id)->delete();
        return redirect()->route('admin.jobs.index')->with(deleteMessage());
    }
}
