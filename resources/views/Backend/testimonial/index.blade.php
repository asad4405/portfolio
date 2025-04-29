@extends('Backend.layouts.master')
@section('title')
    Testimonial
@endsection
@section('maincontent')
    <!-- Simple Datatable start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Testimonial Section</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary btn-sm scroll-click"><i
                        class="fa fa-plus"></i> Create</a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('delete-success'))
            <div class="alert alert-danger">{{ session('delete-success') }}</div>
        @endif
        <div class="pb-20">
            <table class="table data-table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">SL</th>
                        <th>Name</th>
                        <th>Client Sector</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($testimonials as $value)
                        <tr>
                            <td class="table-plus">{{ $loop->index + 1 }}</td>
                            <td>{{ $value->client_name }}</td>
                            <td>{{ $value->client_sector }}</td>
                            <td>{{ $value->position }}</td>
                            <td><img src="{{ asset($value->image) }}" alt="" width="80"></td>
                            <td>
                                @if ($value->status == 1)
                                    <span class="p-1 text-white rounded span bg-success">Active</span>
                                @else
                                    <span class="p-1 text-white rounded span bg-danger">Dective</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="p-0 btn btn-link font-24 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" href="{{ route('admin.testimonial.edit', $value->id) }}"><i
                                                class="dw dw-edit2"></i> Edit</a>
                                        <form action="{{ route('admin.testimonial.destroy', $value->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i>
                                                Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-danger">No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
