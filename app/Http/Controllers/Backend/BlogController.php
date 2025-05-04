<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogSubmitRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('Backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogcategories = BlogCategory::where('status', 1)->latest()->get();
        return view('Backend.blog.create', compact('blogcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogSubmitRequest $request)
    {
        $blog                = new Blog();
        $blog->category_id   = $request->category_id;
        $blog->title         = $request->title;
        $blog->slug          = Str::slug($request->title);
        $blog->short_details = $request->short_details;
        $blog->long_details  = $request->long_details;
        $blog->date          = $request->date;
        $blog->status        = $request->status;

        if ($request->file('thumb_img')) {
            $image = $request->file('thumb_img');

            $imageName          = 'thumbnail_img_' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/blog/';
            $image->move($imagePath, $imageName);
            $blog->thumb_img   = $imagePath . $imageName;
        }

        if ($request->file('main_img')) {
            $image = $request->file('main_img');

            $imageName          = 'main_img_' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/blog/';
            $image->move($imagePath, $imageName);
            $blog->main_img   = $imagePath . $imageName;
        }
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Blog Added Success!');
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
        $value = Blog::find($id);
        $blogcategories = BlogCategory::where('status', 1)->latest()->get();
        return view('Backend.blog.edit', compact('value', 'blogcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title',
            'short_details' => 'required',
            'long_details' => 'required',
            'date' => 'required',
        ]);

        $blog                = Blog::find($id);
        $blog->category_id   = $request->category_id;
        $blog->title         = $request->title;
        $blog->slug          = Str::slug($request->title);
        $blog->short_details = $request->short_details;
        $blog->long_details  = $request->long_details;
        $blog->date          = $request->date;
        $blog->status        = $request->status;

        if ($request->file('thumb_img')) {
            $image = $request->file('thumb_img');

            if (!is_null($blog->thumb_img) && file_exists($blog->thumb_img)) {
                unlink($blog->thumb_img);
            }

            $imageName          = 'thumbnail_img_' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/blog/';
            $image->move($imagePath, $imageName);
            $blog->thumb_img   = $imagePath . $imageName;
        }

        if ($request->file('main_img')) {
            $image = $request->file('main_img');

            if (!is_null($blog->main_img) && file_exists($blog->main_img)) {
                unlink($blog->main_img);
            }

            $imageName          = 'main_img_' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/blog/';
            $image->move($imagePath, $imageName);
            $blog->main_img   = $imagePath . $imageName;
        }
        $blog->update();
        return redirect()->route('admin.blog.index')->with('success', 'Blog Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);

        if (!is_null($blog->thumb_img) && file_exists($blog->thumb_img)) {
            unlink($blog->thumb_img);
        }

        if (!is_null($blog->main_img) && file_exists($blog->main_img)) {
            unlink($blog->main_img);
        }
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('delete-success', 'Blog Deleted Success!');
    }
}
