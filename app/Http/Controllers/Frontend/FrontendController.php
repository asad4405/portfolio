<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Counter;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banner = Banner::where('status', 1)->first();
        $about = About::where('status', 1)->first();
        $socialmedias = SocialMedia::where('status', 1)->get();
        $counters = Counter::where('status', 1)->orderBy('position', 'asc')->get();
        $eductions = Education::where('status', 1)->latest()->get();
        $experiences = Experience::where('status', 1)->orderBy('position', 'asc')->get();
        $portfolios = Portfolio::where('status', 1)->orderBy('position', 'asc')->get();
        $skills = Skill::where('status', 1)->orderBy('position', 'asc')->get();
        $testimonials = Testimonial::where('status', 1)->orderBy('position', 'asc')->take(4)->get();
        $blogs = Blog::where('status', 1)->latest()->take(3)->get();
        $contact = Contact::first();
        return view('Frontend.layouts.pages.index', compact('banner', 'about', 'socialmedias', 'counters', 'eductions', 'experiences', 'portfolios', 'skills', 'testimonials', 'blogs', 'contact'));
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
        return view('Frontend.layouts.pages.contact', compact('contact'));
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

        return back()->with('contactus_success', 'Message send Successfully!');
    }

    public function about()
    {
        $about = About::where('status', 1)->first();
        $contact = Contact::first();
        $eductions = Education::where('status', 1)->latest()->get();
        $experiences = Experience::where('status', 1)->orderBy('position', 'asc')->get();
        return view('Frontend.layouts.pages.about', compact('about', 'contact', 'eductions', 'experiences'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::where('status', 1)->orderBy('position', 'asc')->get();
        $contact = Contact::first();
        $skills = Skill::where('status', 1)->orderBy('position', 'asc')->get();
        return view('Frontend.layouts.pages.portfolio', compact('portfolios', 'contact', 'skills'));
    }

    public function blog()
    {
        $blogs = Blog::where('status', 1)->latest()->get();
        return view('Frontend.layouts.pages.blog', compact('blogs'));
    }

    public function testimonial()
    {
        $testimonials = Testimonial::where('status', 1)->orderBy('position', 'asc')->get();
        return view('Frontend.layouts.pages.testimonial', compact('testimonials'));
    }
}
