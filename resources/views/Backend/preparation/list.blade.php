@extends('Backend.layouts.master')
@section('title')
    Preparation List
@endsection
@section('maincontent')
    <!-- Simple Datatable start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Preparation Section</h4>
            </div>
            <div class="pull-right">

            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('delete-success'))
            <div class="alert alert-danger">{{ session('delete-success') }}</div>
        @endif
        <div class="pb-20">
            <div class="card">
                <div class="card-header">
                    <h3>Preparation List</h3>
                </div>
                <div class="card-body">
                    @foreach ($preparation_categories as $value)
                        <div class="row">
                            <div class="my-3 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{ $value->category_name }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach (App\Models\Routine::where('preparation_category_id', $value->id)->latest()->get() as $routine)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $routine->title }}</td>
                                                    <td>{{ $routine->date }}</td>
                                                    <td>
                                                        @if ($routine->status == 1)
                                                            <span
                                                                class="p-1 text-white rounded span bg-success">Complete</span>
                                                        @else
                                                            <span
                                                                class="p-1 text-white rounded span bg-danger">Incomplete</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($routine->status == 1)
                                                        <a class="text-white btn btn-success">Completed</a>
                                                        @else
                                                            <a href="{{ route('admin.routine.update-status', $routine->id) }}"
                                                                class=" btn btn-danger">Change Status</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
