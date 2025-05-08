<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Preparation;
use App\Models\PreparationCategory;
use Illuminate\Http\Request;

class PreparationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preparations = Preparation::orderBy('position','ASC')->get();
        return view('Backend.preparation.index',compact('preparations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $preparation_categories = PreparationCategory::orderBy('position', 'ASC')->get();
        return view('Backend.preparation.create',compact('preparation_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $preparation              = new Preparation();
        $preparation->category_id = $request->category_id;
        $preparation->routine_id  = $request->routine_id;
        $preparation->title       = $request->title;
        $preparation->date        = $request->date;
        $preparation->position    = $request->position;
        $preparation->status      = $request->status;
        $preparation->save();
        return redirect()->route('admin.preparation.index')->with('success', 'Preparation Added Success!');
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
        $preparation = Preparation::find($id);
        $preparation_categories = PreparationCategory::orderBy('position', 'ASC')->get();
        return view('Backend.preparation.edit',compact('preparation', 'preparation_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $preparation              = Preparation::find($id);
        $preparation->category_id = $request->category_id;
        $preparation->routine_id  = $request->routine_id;
        $preparation->title       = $request->title;
        $preparation->date        = $request->date;
        $preparation->position    = $request->position;
        $preparation->status      = $request->status;
        $preparation->update();
        return redirect()->route('admin.preparation.index')->with('success', 'Preparation Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $preparation = Preparation::find($id);
        $preparation->delete();
        return redirect()->route('admin.preparation.index')->with('success', 'Preparation Deleted Success!');
    }
}
