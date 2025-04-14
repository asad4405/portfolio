@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Experience Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.experience.update',$experience) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Icon</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="icon" type="text" value="{{ $experience->icon }}" />
                    @error('icon')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Experience Position</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="exp_position" type="text" value="{{ $experience->exp_position }}" required />
                    @error('exp_position')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Details</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="details" type="text" value="{{ $experience->details }}" required />
                    @error('details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="text" value="{{ $experience->position }}" />
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
                    Update Experience
                </button>
            </div>
        </form>
    </div>
@endsection
