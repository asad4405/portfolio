<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialSubmitRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('position','ASC')->get();
        return view('Backend.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialSubmitRequest $request)
    {
        $testimonial = new Testimonial();
        $testimonial->client_name   = $request->client_name;
        $testimonial->client_sector = $request->client_sector;
        $testimonial->details       = $request->details;
        $testimonial->position      = $request->position;
        $testimonial->status        = $request->status;

        if ($request->file('image')) {
            $image = $request->file('image');

            $imageName          = 'image_' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/testimonial/';
            $image->move($imagePath, $imageName);
            $testimonial->image   = $imagePath . $imageName;
        }

        $testimonial->save();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial Added Success!');
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
        $testimonial = Testimonial::find($id);
        return view('Backend.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->client_name   = $request->client_name;
        $testimonial->client_sector = $request->client_sector;
        $testimonial->details       = $request->details;
        $testimonial->position      = $request->position;
        $testimonial->status        = $request->status;

        if ($request->file('image')) {
            $image = $request->file('image');

            if (!is_null($testimonial->image) && file_exists($testimonial->image)) {
                unlink($testimonial->image);
            }

            $imageName          = 'image_' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/testimonial/';
            $image->move($imagePath, $imageName);
            $testimonial->image   = $imagePath . $imageName;
        }

        $testimonial->update();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::find($id);

        if (!is_null($testimonial->image) && file_exists($testimonial->image)) {
            unlink($testimonial->image);
        }

        $testimonial->delete();
        return redirect()->route('admin.testimonial.index')->with('delete-success', 'Testimonial Deleted Success!');
    }
}
