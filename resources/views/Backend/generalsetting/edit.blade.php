@extends('Backend.layouts.master')
@section('title')
    Edit General Setting
@endsection
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit General Setting Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.setting.update', $generalsetting->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" type="text" value="{{ $generalsetting->name }}" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Logo</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="logo" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($generalsetting->logo) }}" alt="" width="70">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Dark Logo</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="dark_logo" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($generalsetting->dark_logo) }}" alt="" width="70">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Favicon</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="favicon" type="file" />
                    <div class="mt-2">
                        <img src="{{ asset($generalsetting->favicon) }}" alt="" width="70">
                    </div>
                </div>
            </div>
            {{-- <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="status">
                        <option @if ($generalsetting->status == 1) selected @endif value="1">Active</option>
                        <option @if ($generalsetting->status == 0) selected @endif value="0">Detactive</option>
                    </select>
                </div>
            </div> --}}
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update General Setting
                </button>
            </div>
        </form>
    </div>
@endsection
