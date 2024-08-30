<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PeopleDirectory;
use App\Http\Controllers\Controller;

class PeopleDirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = PeopleDirectory::latest()->paginate(50);
        return view('admin.people.people_list',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::select('id','name')->orderBy('name')->get();
        $route = route('admin.people-directories.store');
        return view('admin.people.people_add_edit',compact('route','departments'));
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
            'department' => 'required|exists:departments,id',
            'name' => 'required|string|max:191',
            'designation' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'telephone' => 'required|string|max:50',
            'linkedin_link' => 'nullable|sometimes|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'description' => 'nullable|sometimes|string|max:10000'
        ]);

        $row = new PeopleDirectory();
        $row->department_id = $request->department;
        $row->name = $request->name;
        $row->slug = Str::slug($request->name);
        $row->designation = $request->designation;
        $row->email = $request->email;
        $row->telephone = $request->telephone;
        $row->linkedin_link = $request->linkedin_link;
        if($request->file('image')) {
            $row->image = uploadImage($request->file('image'),'assets/files/images/people/');
        }
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.people-directories.index')->with(savedMessage());
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
        $departments = Department::select('id','name')->orderBy('name')->get();
        $data = PeopleDirectory::findOrFail($id);
        $route = route('admin.people-directories.update',$id);
        return view('admin.people.people_add_edit',compact('data','route','departments'));
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
            'department' => 'required|exists:departments,id',
            'name' => 'required|string|max:191',
            'designation' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'telephone' => 'required|string|max:50',
            'linkedin_link' => 'nullable|sometimes|string|max:255',
            'image' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
                'max:5120',
                function ($attribute, $value, $fail) use ($request) {
                    if (!$request->id && !$value) {
                        $fail('The ' . $attribute . ' field is required when the id is null.');
                    }
                }
            ],
            'description' => 'nullable|sometimes|string|max:10000',
        ]);
        

        $row = PeopleDirectory::findOrFail($id);
        $row->department_id = $request->department;
        $row->name = $request->name;
        $row->slug = Str::slug($request->name);
        $row->designation = $request->designation;
        $row->email = $request->email;
        $row->telephone = $request->telephone;
        $row->linkedin_link = $request->linkedin_link;
        if($request->file('image')) {
            $row->image = uploadImage($request->file('image'),'assets/files/images/people/');
        }
        $row->description = $request->description;
        $row->save();
        return redirect()->route('admin.people-directories.index')->with(updateMessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = PeopleDirectory::findOrFail($id);
        if(file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return redirect()->route('admin.people.index')->with(deleteMessage());
    }
}
