@extends('Backend.layouts.master')
@section('title')
    Create Testimonial
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Create Testimonial Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Company Name / Client Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('client_name') is-invalid @enderror" name="client_name" type="text" value="{{ old('client_name') }}" />
                    @error('client_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Client Sector</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('client_sector') is-invalid @enderror" name="client_sector" type="text" value="{{ old('client_sector') }}" />
                    @error('client_sector')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('details') is-invalid @enderror" name="details" type="text" value="{{ old('details') }}" />
                    @error('details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Image</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" />
                    @error('image')
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
                    Add Testimonial
                </button>
            </div>
        </form>
    </div>
@endsection
