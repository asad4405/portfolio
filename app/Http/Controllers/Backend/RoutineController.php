<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PreparationCategory;
use App\Models\Routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routines = Routine::orderBy('position', 'ASC')->get();
        return view('Backend.routine.index', compact('routines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $preparation_categories = PreparationCategory::where('status', 1)->orderBy('position', 'ASC')->get();
        return view('Backend.routine.create', compact('preparation_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $routine                          = new Routine();
        $routine->preparation_category_id = $request->preparation_category_id;
        $routine->title                   = $request->title;
        $routine->position                = $request->position;
        $routine->date                    = $request->date;
        $routine->status                  = $request->status;
        $routine->save();
        return redirect()->route('admin.routine.index')->with('success', 'Routine Added Success!');
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
        $routine                = Routine::find($id);
        $preparation_categories = PreparationCategory::where('status', 1)->orderBy('position', 'ASC')->get();
        return view('Backend.routine.edit', compact('routine', 'preparation_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $routine                          = Routine::find($id);
        $routine->preparation_category_id = $request->preparation_category_id;
        $routine->title                   = $request->title;
        $routine->position                = $request->position;
        $routine->date                    = $request->date;
        $routine->status                  = $request->status;
        $routine->save();
        return redirect()->route('admin.routine.index')->with('success', 'Routine Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $routine = Routine::find($id);
        $routine->delete();
        return redirect()->route('admin.routine.index')->with('delete-success', 'Routine Deleted Success!');
    }
}
