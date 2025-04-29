@extends('Backend.layouts.master')
@section('title')
    Edit Portfolio
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Portfolio Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.portfolio.update',$portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                <div class="col-sm-12 col-md-10">
                    <select name="category_id" class="custom-select">
                        <option value="">Select Category</option>
                        @foreach ($portfolio_categories as $value)
                            <option @if($value->id) selected @endif value="{{ $value->id }}">{{ $value->category_name }}</option>
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
                    <input class="form-control" name="title" type="text" value="{{ $portfolio->title }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="details" type="text" value="{{ $portfolio->details }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="image" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($portfolio->image) }}" alt="" width="70">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Link</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="link" type="text" value="{{ $portfolio->link }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="text" value="{{ $portfolio->position }}" />
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
                    Update Portfolio
                </button>
            </div>
        </form>
    </div>
@endsection
