<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::orderBy('position', 'ASC')->get();
        return view('Backend.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skill = new Skill();

        $skill->name = $request->name;
        $skill->icon = $request->icon;
        $skill->color = $request->color;
        $skill->percentage = $request->percentage;
        $skill->position = $request->position;
        $skill->status = $request->status;

        $skill->save();
        return redirect()->route('admin.skill.index')->with('success', 'Skill Added Success!');
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
        $skill = Skill::find($id);
        return view('Backend.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skill = Skill::find($id);

        $skill->name = $request->name;
        $skill->icon = $request->icon;
        $skill->color = $request->color;
        $skill->percentage = $request->percentage;
        $skill->position = $request->position;
        $skill->status = $request->status;

        $skill->update();
        return redirect()->route('admin.skill.index')->with('success', 'Skill Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('admin.skill.index')->with('delete-success', 'Skill Deleted Success!');
    }
}
