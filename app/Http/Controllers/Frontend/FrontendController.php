<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banner = Banner::where('status',1)->first();
        $blogs = Blog::where('status',1)->latest()->take(3)->get();
        return view('Frontend.layouts.pages.index',compact('banner', 'blogs'));
    }

    public function blog_details($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        $recent_blogs = Blog::where('status',1)->latest()->take(4)->get();
        return view('Frontend.layouts.pages.blog-details',compact('blog', 'recent_blogs'));
    }
}
