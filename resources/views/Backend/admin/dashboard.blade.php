@extends('Backend.layouts.master');
@section('title')
Dashboard
@endsection
@section('maincontent')
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="pb-20 title">
            <h2 class="mb-0 h3">Portfolio Overview</h2>
        </div>

        <div class="pb-10 row">
            <div class="mb-20 col-xl-3 col-lg-3 col-md-6">
                <div class="card-box height-100-p widget-style3">
                    <div class="flex-wrap d-flex">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $blogs->count() }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Blog
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf">
                                <i class="icon-copy dw dw-file"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-20 col-xl-3 col-lg-3 col-md-6">
                <div class="card-box height-100-p widget-style3">
                    <div class="flex-wrap d-flex">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $contact_uses->count() }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Contact Us
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ff5b5b">
                                <span class="icon-copy dw dw-phone-call "></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-20 col-xl-3 col-lg-3 col-md-6">
                <div class="card-box height-100-p widget-style3">
                    <div class="flex-wrap d-flex">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $portfolios->count() }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Portfolio
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon">
                                <i class="icon-copy fa fa-briefcase" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-20 col-xl-3 col-lg-3 col-md-6">
                <div class="card-box height-100-p widget-style3">
                    <div class="flex-wrap d-flex">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $testimonials->count() }}</div>
                            <div class="font-14 text-secondary weight-500">Total Testimonials</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#09cc06">
                                <i class="icon-copy fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-10 card-box">
        <div class="mb-0 h5 pd-20">Recent Contact List</div>
        <table class="table data-table table-responsive nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact_uses->take(5) as $value)
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="txt">
                                    <div class="weight-600">{{ $value->first_name }} {{ $value->last_name }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone }}</td>
                        <td>{{ $value->message }}</td>
                        <td>{{ $value->created_at->format('d') }} {{ $value->created_at->format('M') }} {{ $value->created_at->format('Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
