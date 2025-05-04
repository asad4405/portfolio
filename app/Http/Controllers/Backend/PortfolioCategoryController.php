<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio_categories = PortfolioCategory::orderBy('position','ASC')->get();
        return view('Backend.portfoliocategory.index',compact('portfolio_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.portfoliocategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required'
        ]);

        $portfolio_category                = new PortfolioCategory();
        $portfolio_category->category_name = $request->category_name;
        $portfolio_category->position      = $request->position;
        $portfolio_category->status        = $request->status;

        $portfolio_category->save();
        return redirect()->route('admin.portfolio-category.index')->with('success', 'Portfolio Category Added Success!');
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
        $portfolio_category = PortfolioCategory::find($id);
        return view('Backend.portfoliocategory.edit',compact('portfolio_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio_category = PortfolioCategory::find($id);

        $portfolio_category->category_name = $request->category_name;
        $portfolio_category->position = $request->position;
        $portfolio_category->status = $request->status;

        $portfolio_category->update();
        return redirect()->route('admin.portfolio-category.index')->with('success', 'Portfolio Category Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio_category = PortfolioCategory::find($id);
        $portfolio_category->delete();
        return redirect()->route('admin.portfolio-category.index')->with('delete-success', 'Portfolio Category Updated Success!');
    }
}
