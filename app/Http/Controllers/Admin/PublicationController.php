<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PublicationCategory;
use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Publication::latest()->paginate(10);
        return view('admin.insights.publication_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PublicationCategory::select('id','name')->orderBy('name')->get();
        $route = route('admin.publications.store');
        return view('admin.insights.publication_add_edit',compact('route','categories'));
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
            'category' => 'required|exists:publication_categories,id',
            'title' => 'required|string|max:191',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120|dimensions:width=620,height=600',
            'file' => 'nullable|sometimes|mimes:pdf|max:10240',
            'description' => 'required|string|max:10000'
        ]);

        $row = new Publication();
        $row->category_id = $request->category;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        if($request->file('image')) {
            $row->image = uploadImage($request->file('image'),'assets/files/images/publications/');
        }
        if($request->file('file')) {
            $row->file = uploadFile($request->file('file'),'assets/files/images/publications/');
        }
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.publications.index')->with(savedMessage());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Publication::whereSlug($slug)->firstOrFail();
        return view('admin.news.news_details',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = PublicationCategory::select('id','name')->orderBy('name')->get();
        $data = Publication::findOrFail($id);
        $route = route('admin.publications.update',$id);
        return view('admin.insights.publication_add_edit',compact('data','route','categories'));
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
            'category' => 'required|exists:publication_categories,id',
            'title' => 'required|string|max:191',
            'image' => 'nullable|sometimes|image|mimes:png,jpg,jpeg|max:5120|dimensions:width=620,height=600',
            'file' => 'nullable|sometimes|mimes:pdf|max:10240',
            'description' => 'required|string|max:10000'
        ]);

        $row = Publication::findOrFail($id);
        $row->category_id = $request->category;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        if($request->file('image')) {
            $row->image = uploadImage($request->file('image'),'assets/files/images/publications/');
        }
        if($request->file('file')) {
            $row->file = uploadFile($request->file('file'),'assets/files/images/publications/');
        }
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.publications.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Publication::findOrFail($id);
        if(file_exists($row->image)) {
            unlink($row->image);
        }
        if(file_exists($row->file)) {
            unlink($row->file);
        }
        $row->delete();
        return redirect()->route('admin.publications.index')->with(deleteMessage());
    }
}
