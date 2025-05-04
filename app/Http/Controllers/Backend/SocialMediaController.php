<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialMediaSubmitRequest;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialmedias = SocialMedia::latest()->get();
        return view('Backend.socialmedia.index',compact('socialmedias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.socialmedia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocialMediaSubmitRequest $request)
    {
        $socialmedia         = new SocialMedia();
        $socialmedia->title  = $request->title;
        $socialmedia->icon   = $request->icon;
        $socialmedia->link   = $request->link;
        $socialmedia->color  = $request->color;
        $socialmedia->status = $request->status;
        $socialmedia->save();
        return redirect()->route('admin.setting.social-media.index')->with('success', 'Social Media Added Success!');
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
        $value = SocialMedia::find($id);
        return view('Backend.socialmedia.edit',compact('value'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $socialmedia         = SocialMedia::find($id);
        $socialmedia->title  = $request->title;
        $socialmedia->icon   = $request->icon;
        $socialmedia->link   = $request->link;
        $socialmedia->color  = $request->color;
        $socialmedia->status = $request->status;
        $socialmedia->update();
        return redirect()->route('admin.setting.social-media.index')->with('success', 'Social Media Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $socialmedia = SocialMedia::find($id);
        $socialmedia->delete();
        return redirect()->route('admin.setting.social-media.index')->with('success', 'Social Media Deleted Success!');
    }
}
