<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CounterSubmitRequest;
use App\Models\Counter;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counters = Counter::orderBy('position','ASC')->get();
        return view('Backend.counter.index',compact('counters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CounterSubmitRequest $request)
    {
        $counter           = new Counter();
        $counter->title    = $request->title;
        $counter->count    = $request->count;
        $counter->plus     = $request->plus;
        $counter->position = $request->position;
        $counter->status   = $request->status;
        $counter->save();
        return redirect()->route('admin.counter.index')->with('success', 'Counter Added Success!');
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
        $counter = Counter::find($id);
        return view('Backend.counter.edit',compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $counter = Counter::find($id);

        $counter->title = $request->title;
        $counter->count = $request->count;
        $counter->plus = $request->plus;
        $counter->position = $request->position;
        $counter->status = $request->status;

        $counter->update();
        return redirect()->route('admin.counter.index')->with('success', 'Counter Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $counter = Counter::find($id);
        $counter->delete();
        return redirect()->route('admin.counter.index')->with('delete-success', 'Counter Deleted Success!');
    }
}
