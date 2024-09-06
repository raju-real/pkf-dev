<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = ServiceCategory::latest()->paginate(50);
        return view('admin.service.category_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route = route('admin.service-categories.store');
        return view('admin.service.category_add_edit',compact('route'));
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

        $row = new ServiceCategory();
        $row->name = $request->name;
        $row->slug = Str::slug($request->name);
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.service-categories.index')->with(savedMessage());
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
        $data = ServiceCategory::findOrFail($id);
        $route = route('admin.service-categories.update',$id);
        return view('admin.service.category_add_edit',compact('data','route'));
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

        $row = ServiceCategory::findOrFail($id);
        $row->name = $request->name;
        $row->slug = Str::slug($request->name);
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.service-categories.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceCategory::findOrFail($id)->delete();
        return redirect()->route('admin.service-categories.index')->with(deleteMessage());
    }
}
