@extends('Backend.layouts.master')
@section('title')
    Edit Banner
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Banner Section</h4>
            </div>
            {{-- <div class="pull-right">
                <a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse"
                    role="button"><i class="fa fa-plus"></i> Create</a>
            </div> --}}
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" type="text" value="{{ $banner->name }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="title" type="text" value="{{ $banner->title }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Short Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="short_details" type="text" value="{{ $banner->short_details }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="image" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($banner->image) }}" alt="" width="70">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="status">
                        <option @if ($banner->status == 1) selected @endif value="1">Active</option>
                        <option @if ($banner->status == 0) selected @endif value="0">Detactive</option>
                    </select>
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
