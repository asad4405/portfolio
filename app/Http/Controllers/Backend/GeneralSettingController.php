<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generalsettings = GeneralSetting::take(1)->get();
        return view('Backend.generalsetting.index', compact('generalsettings'));
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
        $generalsetting = GeneralSetting::find($id);
        return view('Backend.generalsetting.edit', compact('generalsetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $generalsetting = GeneralSetting::find($id);

        $generalsetting->name = $request->name;

        if ($request->file('logo')) {
            $image = $request->file('logo');

            if (!is_null($generalsetting->logo) && file_exists($generalsetting->logo)) {
                unlink($generalsetting->logo);
            }

            $imageName          = 'logo-'.microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/generalsetting/';
            $image->move($imagePath, $imageName);

            $generalsetting->logo   = $imagePath . $imageName;
        }
        
        if ($request->file('favicon')) {
            $image2 = $request->file('favicon');

            if (!is_null($generalsetting->favicon) && file_exists($generalsetting->favicon)) {
                unlink($generalsetting->favicon);
            }

            $imageName          = 'favicon-'.microtime('.') . '.' . $image2->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/generalsetting/';
            $image2->move($imagePath, $imageName);

            $generalsetting->favicon   = $imagePath . $imageName;
        }
        $generalsetting->status = 1;

        $generalsetting->update();
        return redirect()->route('admin.setting.index')->with('success', 'General Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
