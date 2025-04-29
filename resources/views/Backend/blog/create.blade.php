@extends('Backend.layouts.master')
@section('title')
    Create Blog
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Create Blog Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="category_id">
                        <option value="">Select Category</option>
                        @foreach ($blogcategories as $value)
                            <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="title" type="text" value="{{ old('title') }}" />
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Short Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="short_details" type="text" value="{{ old('short_details') }}" />
                    @error('short_details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Long Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="long_details" type="text" value="{{ old('long_details') }}" />
                    @error('long_details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Date</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="date" type="date" value="{{ old('date') }}" />
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Thumbnail Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="thumb_img" type="file" value="{{ old('thumb_img') }}" />
                    @error('thumb_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Main Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="main_img" type="file" value="{{ old('main_img') }}" />
                    @error('main_img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="status">
                        <option value="1">Active</option>
                        <option value="0">Detactive</option>
                    </select>
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Add Blog
                </button>
            </div>
        </form>
    </div>
@endsection
