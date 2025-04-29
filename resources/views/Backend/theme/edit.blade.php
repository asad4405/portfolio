@extends('Backend.layouts.master')
@section('title')
    Edit Theme
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Theme Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.theme.update',$theme->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Type</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="theme_type">
                        <option @if($theme->theme_type == 'light') selected @endif value="light">Light Theme</option>
                        <option @if($theme->theme_type == 'dark') selected @endif value="dark">Dark Theme</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Theme Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" type="text" value="{{ $theme->name }}" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Background Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="bg_color" type="color" value="{{ $theme->bg_color }}" />
                    @error('bg_color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="color" type="color" value="{{ $theme->color }}" />
                    @error('color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Others Background Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="bg_color_two" type="color" value="{{ $theme->bg_color_two }}" />
                    @error('bg_color_two')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Others Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="color_two" type="color" value="{{ $theme->color_two }}" />
                    @error('color_two')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="text" value="{{ $theme->position }}" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="status">
                        <option @if($theme->status == 1) selected @endif value="1">Active</option>
                        <option @if($theme->status == 0) selected @endif value="0">Detactive</option>
                    </select>
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update Theme
                </button>
            </div>
        </form>
    </div>
@endsection
