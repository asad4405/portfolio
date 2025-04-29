@extends('Backend.layouts.master')
@section('title')
    Edit Testimonial
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Testimonial Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.testimonial.update',$testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Company Name / Client Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="client_name" type="text" value="{{ $testimonial->client_name }}" />
                    @error('client_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Client Sector</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="client_sector" type="text" value="{{ $testimonial->client_sector }}" />
                    @error('client_sector')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="details" type="text" value="{{ $testimonial->details }}" />
                    @error('details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="image" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($testimonial->image) }}" alt="" width="80">
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="text" value="{{ $testimonial->position }}" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="status">
                        <option @if($testimonial->status == 1) selected @endif value="1">Active</option>
                        <option @if($testimonial->status == 0) selected @endif value="0">Detactive</option>
                    </select>
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update Testimonial
                </button>
            </div>
        </form>
    </div>
@endsection
