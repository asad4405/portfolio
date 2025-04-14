<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('Backend.experience.index',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experience = new Experience();
        $experience->icon = $request->icon;
        $experience->exp_position = $request->exp_position;
        $experience->details = $request->details;
        $experience->position = $request->position;
        $experience->status = $request->status;

        $experience->save();
        return redirect()->route('admin.experience.index')->with('success', 'Experience Added Success!');
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
        $experience = Experience::find($id);
        return view('Backend.experience.edit',compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experience = Experience::find($id);

        $experience = new Experience();
        $experience->icon = $request->icon;
        $experience->exp_position = $request->exp_position;
        $experience->details = $request->details;
        $experience->position = $request->position;
        $experience->status = $request->status;

        $experience->update();
        return redirect()->route('admin.experience.index')->with('success', 'Experience Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect()->route('admin.experience.index')->with('delete-success', 'Blog Deleted Success!');
    }
}
