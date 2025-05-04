<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioSubmitRequest;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio_categories = PortfolioCategory::orderBy('position','ASC')->get();
        $portfolios = Portfolio::orderBy('position','ASC')->get();
        return view('Backend.portfolio.index',compact('portfolios','portfolio_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $portfolio_categories = PortfolioCategory::orderBy('position', 'ASC')->get();
        return view('Backend.portfolio.create',compact('portfolio_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioSubmitRequest $request)
    {
        $portfolio = new Portfolio();
        $portfolio->category_id = $request->category_id;
        $portfolio->title       = $request->title;
        $portfolio->slug        = Str::slug($request->title);
        $portfolio->details     = $request->details;
        $portfolio->link        = $request->link;
        $portfolio->position    = $request->position;
        $portfolio->status      = $request->status;

        if ($request->file('image')) {
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/portfolio/';
            $image->move($imagePath, $imageName);

            $portfolio->image   = $imagePath . $imageName;
        }

        $portfolio->save();
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio Added Success!');
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
        $portfolio_categories = PortfolioCategory::orderBy('position', 'ASC')->get();
        $portfolio = Portfolio::find($id);
        return view('Backend.portfolio.edit',compact('portfolio_categories','portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio = Portfolio::find($id);

        $portfolio->category_id = $request->category_id;
        $portfolio->title = $request->title;
        $portfolio->slug = Str::slug($request->title);
        $portfolio->details = $request->details;
        $portfolio->link = $request->link;
        $portfolio->position = $request->position;
        $portfolio->status = $request->status;

        if ($request->file('image')) {
            $image = $request->file('image');

            if (!is_null($portfolio->image) && file_exists($portfolio->image)) {
                unlink($portfolio->image);
            }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/portfolio/';
            $image->move($imagePath, $imageName);

            $portfolio->image   = $imagePath . $imageName;
        }

        $portfolio->update();
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::find($id);

        if (!is_null($portfolio->image) && file_exists($portfolio->image)) {
            unlink($portfolio->image);
        }

        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio Updated Success!');
    }
}
