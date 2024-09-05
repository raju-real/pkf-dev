<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = News::latest()->paginate(10);
        return view('admin.news.news_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NewsCategory::select('id','name')->orderBy('name')->get();
        $route = route('admin.news.store');
        return view('admin.news.news_add_edit',compact('route','categories'));
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
            'category' => 'required|exists:news_categories,id',
            'title' => 'required|string|max:191',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120|dimensions:width=620,height=600',
            'description' => 'required|string|max:10000'
        ]);

        $row = new News();
        $row->category_id = $request->category;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        if($request->file('image')) {
            $row->image = uploadImage($request->file('image'),'assets/files/images/news/');
        }
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.news.index')->with(savedMessage());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = News::whereSlug($slug)->firstOrFail();
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
        $categories = NewsCategory::select('id','name')->orderBy('name')->get();
        $data = News::findOrFail($id);
        $route = route('admin.news.update',$id);
        return view('admin.news.news_add_edit',compact('data','route','categories'));
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
            'category' => 'required|exists:news_categories,id',
            'title' => 'required|string|max:191',
            'image' => 'nullable|sometimes|image|mimes:png,jpg,jpeg|max:5120|dimensions:width=620,height=600',
            'description' => 'required|string|max:10000'
        ]);

        $row = News::findOrFail($id);
        $row->category_id = $request->category;
        $row->title = $request->title;
        $row->slug = Str::slug($request->title);
        if($request->file('image')) {
            if(file_exists($row->image)) {
                unlink($row->image);
            }
            $row->image = uploadImage($request->file('image'),'assets/files/images/news/');
        }
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.news.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = News::findOrFail($id);
        if(file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return redirect()->route('admin.news.index')->with(deleteMessage());
    }
}
