@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Show {{ $contactus_show->first_name }} {{ $contactus_show->last_name }} Contact List
                </h4>
            </div>
        </div>
        <div class="mt-3">
            <table class="table text-center table-bordered">
                <tr>
                    <th>Header</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $contactus_show->first_name }} {{ $contactus_show->last_name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $contactus_show->email }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $contactus_show->phone }}</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>{{ $contactus_show->message }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
