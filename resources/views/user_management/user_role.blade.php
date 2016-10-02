@extends('layouts.dt')
@section('title', 'Manage User Roles')
@section('page-title', 'Manage User Roles')
@section('widget-title', 'User Management')
@section('top_navigation')
    <a href="" data-toggle="modal" data-target="#remoteModal" class="btn btn-success btn-lg pull-right header-btn hidden-mobile">
        <i class="fa fa-circle-arrow-up fa-lg"></i>
        Add User Role
    </a>
@endsection

@section('content')
    <table id="table1" class="table table-bordered">
        <thead>
        <tr>
            <th>Role#</th>
            <th>Name</th>
            <th>Code</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>System Admin</td>
            <td>ADMIN</td>
            <td>Active</td>
        </tr>
        </tbody>
    </table>
    <div class="clearfix"></div>
@endsection