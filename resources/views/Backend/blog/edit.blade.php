@extends('Backend.layouts.master')
@section('title')
    Edit Blog
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Blog Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.blog.update', $value->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="category_id">
                        <option value="">Select Category</option>
                        @foreach ($blogcategories as $category)
                            <option @if($category->id) selected @endif value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="title" type="text" value="{{ $value->title }}" />
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Short Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="short_details" type="text" value="{{ $value->short_details }}" />
                    @error('short_details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Long Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="long_details" type="text" value="{{ $value->long_details }}" />
                    @error('long_details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Date</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="date" type="date" value="{{ $value->date }}" />
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Thumbnail Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="thumb_img" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($value->thumb_img) }}" alt="" width="70">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Main Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="main_img" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($value->main_img) }}" alt="" width="70">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="status">
                        <option @if ($value->status == 1) selected @endif value="1">Active</option>
                        <option @if ($value->status == 0) selected @endif value="0">Detactive</option>
                    </select>
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update Blog
                </button>
            </div>
        </form>
    </div>
@endsection
