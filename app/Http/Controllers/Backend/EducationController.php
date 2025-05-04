<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationSubmitRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::latest()->get();
        return view('Backend.education.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationSubmitRequest $request)
    {
        $education                 = new Education();
        $education->year_title     = $request->year_title;
        $education->course_name    = $request->course_name;
        $education->institute_name = $request->institute_name;
        $education->status         = $request->status;

        $education->save();
        return redirect()->route('admin.education.index')->with('success','Education Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $education = Education::find($id);
        return view('Backend.education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $education = Education::find($id);

        $education->year_title = $request->year_title;
        $education->course_name = $request->course_name;
        $education->institute_name = $request->institute_name;
        $education->status = $request->status;

        $education->update();
        return redirect()->route('admin.education.index')->with('success', 'Education Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect()->route('admin.education.index')->with('delete-success', 'Education Deleted Successfull!');
    }
}
