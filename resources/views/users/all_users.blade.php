@extends('layouts.dt')
@section('title', 'All Users')
@section('page-title', 'All User Management')
@section('widget-title', 'All Users')

@push('js')
<script src="{{ URL::asset('src_js/users/all_users.js') }}"></script>
@endpush

@section('breadcrumbs')
    <li>
        <i class="icon-home"></i>
        <a href="index.php">Home</a>
        <span class="icon-right-angle"></span>
    </li>
    <li>
        User Management
        <span class="icon-right-angle"></span>
    </li>
    <li><a href="{{ url('all-users') }}">All Users</a></li>
@endsection

@section('actions')
    <button id="reset-pass-btn" class="btn btn-primary btn-small" title="Reset User Password" data-toggl data-target="#reset_pass">
        <i class="icon-edit"></i> Reset Password
    </button>
    <button id="delete-user-btn" class="btn btn-danger btn-small" title="Delete User Account">
        <i class="icon-trash"></i> Delete
    </button>
    <button id="refresh-actions" class="btn btn-info btn-small">Refresh</button>
@endsection


@section('content')
    <div id="feedback"></div>
    <table id="all_users" class="table table-bordered">
        <thead>
        <tr>
            <th>Id#</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Status</th>
            <th>Created</th>
            <th>Manage</th>
        </tr>
        </thead>
    </table>
@endsection

@section('modals')
    {{--Add Modal--}}
    <form action="{{ url('/reset-pass') }}" method="post">
        {{ csrf_field() }}
        <div id="reset_pass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Reset Password</h3>
            </div>
            <div class="modal-body">
                <div class="row-fluid">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="span12">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            {{--hidden fields--}}
            <input type="hidden" name="edit_id" id="edit_id"/>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
                <button class="btn btn-primary"><i class="icon-save"></i> Reset Password</button>
            </div>
        </div>
    </form>

    <form action="{{ url('/reset-pass') }}" method="post" id="add-sysaction-form">
        {{ csrf_field() }}
        <div id="add-sysaction" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Add Sys Action</h3>
            </div>
            <div class="modal-body">
                <div class="row-fluid">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="span12">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" value="Close" data-dismiss="modal">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>


    {{--Delete Modal--}}
    <form action="{{ url('/delete-user') }}" method="post">
        {{ csrf_field() }}
        <div id="delete_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Delete User</h3>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the user from the system?</p>
            </div>

            {{--hidden fields--}}
            <input type="hidden" name="delete_id" id="delete_id"/>
            <input type="hidden" name="_method" value="delete"/>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> No</button>
                <button class="btn btn-danger"><i class="icon-remove"></i> Yes</button>
            </div>
        </div>
    </form>
@endsection