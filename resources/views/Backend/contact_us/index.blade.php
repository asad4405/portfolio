@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Simple Datatable start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Contact Us Section</h4>
            </div>
        </div>
        <div class="pb-20">
            <table class="table data-table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactus_lists as $value)
                        <tr>
                            <td class="table-plus">{{ $loop->index + 1 }}</td>
                            <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="p-0 btn btn-link font-24 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="{{ route('admin.contactus.show',$value->id) }}"><i class="dw dw-eye"></i> View</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
