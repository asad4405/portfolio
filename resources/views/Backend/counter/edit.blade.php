@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Update Counter Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.counter.update',$counter->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Title</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="title" type="text" value="{{ $counter->title }}" />
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Count</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="count" type="text" value="{{ $counter->count }}" />
                    @error('count')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Plus</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="plus">
                        <option @if ($counter->plus == 1) selected @endif value="1">Yes</option>
                        <option @if ($counter->plus == 0) selected @endif value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="text" value="{{ $counter->position }}" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="status">
                        <option  @if ($counter->status == 1) selected @endif value="1">Active</option>
                        <option  @if ($counter->status == 0) selected @endif value="0">Detactive</option>
                    </select>
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update Counter
                </button>
            </div>
        </form>
    </div>
@endsection
