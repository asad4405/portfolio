<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PreparationCategory;
use Illuminate\Http\Request;

class PreparationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preparation_categories = PreparationCategory::orderBy('position','ASC')->get();
        return view('Backend.preparation_category.index',compact('preparation_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.preparation_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $preparation_category                = new PreparationCategory();
        $preparation_category->category_name = $request->category_name;
        $preparation_category->position      = $request->position;
        $preparation_category->status        = $request->status;
        $preparation_category->save();
        return redirect()->route('admin.preparation-category.index')->with('success', 'Preparation Category Added Success!');
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
        $preparation_category = PreparationCategory::find($id);
        return view('Backend.preparation_category.edit',compact('preparation_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $preparation_category                = PreparationCategory::find($id);
        $preparation_category->category_name = $request->category_name;
        $preparation_category->position      = $request->position;
        $preparation_category->status        = $request->status;
        $preparation_category->update();
        return redirect()->route('admin.preparation-category.index')->with('success', 'Preparation Category Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $preparation_category = PreparationCategory::find($id);
        $preparation_category->delete();
        return redirect()->route('admin.preparation-category.index')->with('delete-success', 'Preparation Category Deleted Success!');
    }
}
