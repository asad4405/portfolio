<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        // return view('Backend.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $banner = Banner::first();
        return view('Backend.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $banner = Banner::find($id);
        $banner->name = $request->name;
        $banner->title = $request->title;
        $banner->short_details = $request->short_details;
        $banner->status = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');

            if (!is_null($banner->image) && file_exists($banner->image)) {
                unlink($banner->image);
            }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/banner/';
            $image->move($imagePath, $imageName);

            $banner->image   = $imagePath . $imageName;
        }

        $banner->update();
        return redirect()->back()->with('success','Banner Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
