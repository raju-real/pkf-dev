<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Slider::latest()->paginate(50);
        return view('admin.sliders.slider_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route = route('admin.sliders.store');
        return view('admin.sliders.slider_add_edit',compact('route'));
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
            'title' => 'required|string|max:191',
            'short_text' => 'nullable|sometimes|string|max:191',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120|dimensions:width=1920,height=468',
            'button_name' => 'nullable|sometimes|string|max:50',
            'link' => 'nullable|sometimes|string|max:350',
            'bg_color' => 'required'
        ]);

        $row = new Slider();
        $row->title = $request->title;
        $row->short_text = $request->short_text;
        if($request->file('image')) {
            $row->image = uploadImage($request->file('image'),'assets/files/images/sliders/');
        }
        $row->button_name = $request->button_name;
        $row->link = $request->link;
        $row->bg_color = $request->bg_color;
        $row->save();
        return redirect()->route('admin.sliders.index')->with(savedMessage());
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
        $data = Slider::findOrFail($id);
        $route = route('admin.sliders.update',$id);
        return view('admin.sliders.slider_add_edit',compact('data','route'));
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
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'short_text' => 'nullable|sometimes|string|max:191',
            'image' => 'nullable|sometimes|image|mimes:png,jpg,jpeg|max:5120|dimensions:width=1920,height=468',
            'button_name' => 'nullable|sometimes|string|max:50',
            'link' => 'nullable|sometimes|string|max:350',
            'bg_color' => 'required'
        ]);

        $row = Slider::findOrFail($id);
        $row->title = $request->title;
        $row->short_text = $request->short_text;
        if($request->file('image')) {
            if(file_exists($row->image)) {
                unlink($row->image);
            }
            $row->image = uploadImage($request->file('image'),'assets/files/images/sliders/');
        }
        $row->button_name = $request->button_name;
        $row->link = $request->link;
        $row->bg_color = $request->bg_color;
        $row->save();
        return redirect()->route('admin.sliders.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Slider::findOrFail($id);
        if(file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return redirect()->route('admin.sliders.index')->with(deleteMessage());
    }
}
