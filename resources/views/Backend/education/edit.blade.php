@extends('Backend.layouts.master')
@section('title')
    Edit Education
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Education Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.education.update',$education->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Year Title</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="year_title" type="text" value="{{ $education->year_title }}" />
                    @error('year_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Course Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="course_name" type="text" value="{{ $education->course_name }}" />
                    @error('course_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Institute Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="institute_name" type="text" value="{{ $education->institute_name }}" />
                    @error('institute_name')
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
                    Update Education
                </button>
            </div>
        </form>
    </div>
@endsection
