<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\ServiceSubcategory;
use Illuminate\Http\Request;

class ServiceSubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = ServiceSubcategory::latest()->paginate(50);
        return view('admin.service.subcategory_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ServiceCategory::orderBy('name')->get();
        $route = route('admin.service-subcategories.store');
        return view('admin.service.subcategory_add_edit',compact('route','categories'));
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
            'category' => 'required|exists:service_categories,id',
            'name' => 'required|string|max:191',
            'description' => 'nullable|sometimes|string|max:300'
        ]);

        $row = new ServiceSubcategory();
        $row->category_id = $request->category;
        $row->name = $request->name;
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.service-subcategories.index')->with(savedMessage());
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
        $categories = ServiceCategory::orderBy('name')->get();
        $data = ServiceSubcategory::findOrFail($id);
        $route = route('admin.service-subcategories.update',$id);
        return view('admin.service.subcategory_add_edit',compact('data','route','categories'));
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
            'category' => 'required|exists:service_categories,id',
            'name' => 'required|string|max:191',
            'description' => 'nullable|sometimes|string|max:300'
        ]);

        $row = ServiceSubcategory::findOrFail($id);
        $row->category_id = $request->category;
        $row->name = $request->name;
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.service-subcategories.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceSubcategory::findOrFail($id)->delete();
        return redirect()->route('admin.service-subcategories.index')->with(deleteMessage());
    }
}
