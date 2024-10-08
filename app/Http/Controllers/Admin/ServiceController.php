<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

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
            'category' => 'required|exists:service_categories,id',
            'subcategory' => 'required|exists:service_subcategories,id',
            'title' => 'required|string|max:191',
            'description' => 'nullable|sometimes|string|max:10000',
            'icon' => 'nullable|sometimes|image|mimes:png|max:1024',
        ]);

        $row = new Service();
        $row->category_id = $request->category;
        $row->subcategory_id = $request->subcategory;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        $row->description = $request->description;
        if($request->file('icon')) {
            $row->icon = uploadImage($request->file('icon'),'assets/files/images/services/');
        }
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
        $categories = ServiceCategory::orderBy('name')->get();
        $data = Service::findOrFail($id);
        $route = route('admin.services.update',$id);
        return view('admin.service.service_add_edit',compact('data','route','categories'));
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
            'subcategory' => 'required|exists:service_subcategories,id',
            'title' => 'required|string|max:191',
            'description' => 'nullable|sometimes|string|max:10000',
            'icon' => 'nullable|sometimes|image|mimes:png|max:1024',
        ]);

        $row = Service::findOrFail($id);
        $row->category_id = $request->category;
        $row->subcategory_id = $request->subcategory;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        $row->description = $request->description;
        if($request->file('icon')) {
            if(file_exists($row->icon)) {
                unlink($row->icon);
            }
            $row->icon = uploadImage($request->file('icon'),'assets/files/images/services/');
        }
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
        $data = Service::findOrFail($id);
        if(file_exists($data->icon)) {
            unlink($data->icon);
        }
        $data->delete();
        return redirect()->route('admin.services.index')->with(deleteMessage());
    }
}
