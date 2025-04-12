<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('Backend.contact.index',compact('contacts'));
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
        $value = Contact::find($id);
        return view('Backend.contact.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);

        $contact->number = $request->number;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->maplink = $request->maplink;
        $contact->status = $request->status;

        $contact->update();
        return redirect()->route('admin.setting.contact.index')->with('success', 'Contact Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function contactus_list()
    {
        $contactus_lists = ContactUs::latest()->get();
        return view('Backend.contact_us.index',compact('contactus_lists'));
    }

    public function contactus_show($id)
    {
        $contactus_show = ContactUs::find($id);
        return view('Backend.contact_us.show',compact('contactus_show'));
    }
}
