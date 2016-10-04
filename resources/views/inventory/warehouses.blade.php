@extends('layouts.dt')
@section('title','Manage Warehouses')
@section('page-title','Manage Warehouses')
@section('page-title-small', 'Warehouses')
@section('breadcrumbs')
    <li >
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <a href="#">Inventory</a>
        <span class="icon-angle-right"></span>
    </li>
    <li><a href="#">Warehouses</a></li>
@endsection
@section('widget-title', 'Manage Warehouses')
@section('actions')
    <a href="#add_warehouse" class="btn btn-primary" data-toggle="modal">Add Warehouse</a>
@endsection
@section('content')
    @include('layouts.includes._messages')
    <table class="table table-bordered" id="table1" >
        <thead>
        <tr>
            <th>Id</th>
            <th>Warehouse name</th>
            <th>Warehouse code</th>
            <th>Warehouse status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @if(count($warehouses))
            @foreach($warehouses as $warehouse)
                <tr>
                    <td>{{ $warehouse->id }}</td>
                    <td>{{ $warehouse->warehouse_name }}</td>
                    <td>{{ $warehouse->warehouse_code }}</td>
                    <td>{{ $warehouse->warehouse_status }}</td>
                    <td><a href="#edit_warehouse" edit-id="{{ $warehouse->id }}" class="btn btn-small btn-success edit_cat" data-toggle="modal">Edit</a> </td>
                    <td><form method="post" action="{{ url('/delete-warehouse/'.$warehouse->id) }}">
                            {{ csrf_field() }}
                            <input type="submit" name="DELETE" value="Delete" class="btn btn-danger btn-small delete_category">
                            {{ method_field('DELETE') }}
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
@section('modals')
    {{--modal for add--}}

    <form action="{{ url('/add_warehouse') }}" method="post">
        {{ csrf_field() }}
        <div id="add_warehouse" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Add Warehouse</h3>
            </div>
            <div class="modal-body">

                <div class="row-fluid">
                    <label for="group_name">Warehouse name:</label>
                    <input type="text" name="Warehouse_name"  class="span12" required>
                </div>
                <div class="row-fluid">
                    <label for="group_name">Warehouse code:</label>
                    <input type="text" name="Warehouse_code"  class="span12" required>
                </div>
                <label for="group_name">Warehouse status:</label>
                <div class="row-fluid">
                    <select name="Warehouse_status" class="span12" required>
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

        <form action="{{ url('/update-warehouse/') }}" id="edit-cat-form" method="post">
            {{ csrf_field() }}
            <div id="edit_warehouse" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel1">Edit Warehouse</h3>
                </div>
                <div class="modal-body">

                    <div class="row-fluid">
                        <label for="group_name">Warehouse name:</label>
                        <input type="text" name="category_name" id="cat-name"value="" class="span12" required>
                    </div>
                    <div class="row-fluid">
                        <label for="group_name">Warehouse code:</label>
                        <input type="text" name="category_code" id ="cat-code"class="span12" required>
                    </div>
                    <label for="group_name">Warehouse status:</label>
                    <div class="row-fluid">
                        <select name="category_status" id="cat-status"class="span12" required>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" id="route-id">
                    <input type="button" class="btn btn-default" value="Close" data-dismiss="modal">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </div>
        </form>
    </form>
@endsection
