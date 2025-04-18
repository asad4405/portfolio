<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::orderBy('position','asc')->get();
        return view('Backend.theme.index',compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.theme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $theme = new Theme();

        $theme->theme_type = $request->theme_type;
        $theme->name = $request->name;
        $theme->slug = Str::slug($request->name);
        $theme->bg_color = $request->bg_color;
        $theme->color = $request->color;
        $theme->bg_color_two = $request->bg_color_two;
        $theme->color_two = $request->color_two;
        $theme->position = $request->position;
        $theme->status = $request->status;

        $theme->save();
        return redirect()->route('admin.theme.index')->with('success', 'Theme Added Success!');
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
        $theme = Theme::find($id);
        return view('Backend.theme.edit',compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $theme = Theme::find($id);

        $theme->theme_type = $request->theme_type;
        $theme->name = $request->name;
        $theme->slug = Str::slug($request->name);
        $theme->bg_color = $request->bg_color;
        $theme->color = $request->color;
        $theme->bg_color_two = $request->bg_color_two;
        $theme->color_two = $request->color_two;
        $theme->position = $request->position;
        $theme->status = $request->status;

        $theme->update();
        return redirect()->route('admin.theme.index')->with('success', 'Theme Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $theme = Theme::find($id);
        $theme->delete();
        return redirect()->route('admin.theme.index')->with('delete-success', 'Theme Deleted Success!');
    }
}
