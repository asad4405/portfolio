<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Education;
use App\Models\Experience;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banner = Banner::where('status', 1)->first();
        $socialmedias = SocialMedia::where('status', 1)->get();
        $eductions = Education::latest()->get();
        $experiences = Experience::orderBy('position', 'desc')->get();
        $blogs = Blog::where('status', 1)->latest()->take(3)->get();
        $contact = Contact::first();
        return view('Frontend.layouts.pages.index', compact('banner', 'socialmedias', 'eductions', 'experiences', 'blogs', 'contact'));
    }

    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $recent_blogs = Blog::where('status', 1)->latest()->take(4)->get();
        return view('Frontend.layouts.pages.blog-details', compact('blog', 'recent_blogs'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('Frontend.layouts.pages.contact',compact('contact'));
    }

    public function contact_submit(Request $request)
    {
        $contact_us = new ContactUs();

        $contact_us->first_name = $request->first_name;
        $contact_us->last_name = $request->last_name;
        $contact_us->email = $request->email;
        $contact_us->phone = $request->phone;
        $contact_us->message = $request->message;

        $contact_us->save();

        return back()->with('contactus_success','Message send Successfully!');
    }
}
