@extends('layouts.dt')
@section('title', 'Routes')
@section('page-title', 'Manage System Routes')
@section('widget-title', 'Routes')

@push('js')
    <script src="{{ URL::asset('src_js/system/routes.js') }}"></script>
@endpush

@section('breadcrumbs')
    <li>
        <i class="icon-home"></i>
        <a href="index.php">Home</a>
        <span class="icon-right-angle"></span>
    </li>
    <li>
        System
        <span class="icon-right-angle"></span>
    </li>
    <li><a href="{{ url('routes') }}">Routes</a></li>
@endsection

@section('actions')
    <button class="btn btn-primary btn-small" title="Add Route" data-toggle="modal" data-target="#add-route">
        <i class="icon-plus"></i> Add
    </button>
    <button id="edit-route-btn" class="btn btn-warning btn-small" title="Edit Route" data-toggle="modal" data-target="#edit-route">
        <i class="icon-edit"></i> Edit
    </button>
    <button id="edit-route-btn" class="btn btn-danger btn-small" title="Delete Route" data-toggle="modal" data-target="#delete-route">
        <i class="icon-trash"></i> Delete
    </button>
    <button id="refresh-routes" class="btn btn-info btn-small">Refresh</button>
@endsection

@section('content')
    <table id="routes" class="table table-bordered">
        <thead>
            <tr>
                <th>Route#</th>
                <th>Name</th>
                <th>URL</th>
                <th>Parent</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
@endsection