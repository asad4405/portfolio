@extends('Backend.layouts.master')
@section('title')
    Create Preparation
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Create Preparation Section</h4>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.preparation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                <div class="col-sm-12 col-md-10">
                    <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($preparation_categories as $value)
                            <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
                <label class="col-sm-12 col-md-2 col-form-label">Date</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="date" type="date" value="{{ old('date') }}" />
                    @error('date')
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
                    Add Preparation
                </button>
            </div>
        </form>
    </div>
@endsection
