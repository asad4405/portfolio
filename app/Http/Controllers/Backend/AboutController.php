<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $value = About::find($id);
        return view('Backend.about.edit',compact('value'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::find($id);
        $about->name = $request->name;
        $about->designation = $request->designation;
        $about->details = $request->details;
        $about->status = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');

            if (!is_null($about->image) && file_exists($about->image)) {
                unlink($about->image);
            }

            $imageName          = 'about' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/about/';
            $image->move($imagePath, $imageName);
            $about->image   = $imagePath . $imageName;
        }
        $about->update();
        return redirect()->back()->with('success', 'About Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
