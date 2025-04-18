@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Create Theme Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.theme.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Type</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="theme_type">
                        <option value="light">Light Theme</option>
                        <option value="dark">Dark Theme</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Theme Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" type="text" value="{{ old('name') }}" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Background Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="bg_color" type="color" value="{{ old('bg_color') }}" />
                    @error('bg_color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="color" type="color" value="{{ old('color') }}" />
                    @error('color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Others Background Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="bg_color_two" type="color" value="{{ old('bg_color_two') }}" />
                    @error('bg_color_two')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Theme Others Color Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="color_two" type="color" value="{{ old('color_two') }}" />
                    @error('color_two')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="text" value="{{ old('position') }}" />
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
                    Add Theme
                </button>
            </div>
        </form>
    </div>
@endsection
