<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogcategories = BlogCategory::latest()->get();
        return view('Backend.blogcategory.index', compact('blogcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.blogcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $blogcategory = new BlogCategory();
        $blogcategory->category_name = $request->category_name;
        $blogcategory->status = $request->status;
        $blogcategory->save();
        return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category Added Success!');
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
        $value = BlogCategory::find($id);
        return view('Backend.blogcategory.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogcategory = BlogCategory::find($id);
        $blogcategory->category_name = $request->category_name;
        $blogcategory->status = $request->status;
        $blogcategory->update();
        return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogcategory = BlogCategory::find($id);
        $blogcategory->delete();
        return redirect()->route('admin.blog-category.index')->with('delete-success', 'Blog Category Deleted Success!');
    }
}
