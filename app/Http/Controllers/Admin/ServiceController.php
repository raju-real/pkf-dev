<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Service::latest()->paginate(50);
        return view('admin.service.service_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ServiceCategory::orderBy('name')->get();
        $route = route('admin.services.store');
        return view('admin.service.service_add_edit',compact('route','categories'));
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

        $row = new Service();
        $row->name = $request->name;
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.services.index')->with(savedMessage());
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
        $data = Service::findOrFail($id);
        $route = route('admin.services.update',$id);
        return view('admin.service.service_add_edit',compact('data','route'));
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

        $row = Service::findOrFail($id);
        $row->name = $request->name;
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.services.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        return redirect()->route('admin.services.index')->with(deleteMessage());
    }
}
