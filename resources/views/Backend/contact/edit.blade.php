@extends('Backend.layouts.master')
@section('title')
    Edit Contact
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Contact Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.setting.contact.update', $value->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Number</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="number" type="text" value="{{ $value->number }}" />
                    @error('number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="email" type="email" value="{{ $value->email }}" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Address</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="address" type="text" value="{{ $value->address }}" />
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Map Link</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="maplink" type="text" value="{{ $value->maplink }}" />
                    @error('maplink')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
                    Update Contact
                </button>
            </div>
        </form>
    </div>
@endsection
