@extends('layouts.dt')
@section('title','Manage Categories')
@section('page-title','Manage Categories')
@section('page-title-small', 'Item Category')
@section('breadcrumbs')
    <li >
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <a href="#">Inverntory</a>
        <span class="icon-angle-right"></span>
    </li>
    <li><a href="#">Categories</a></li>
@endsection
@section('widget-title', 'Manage Categories')
@section('actions')
    <a href="#add_category" class="btn btn-primary" data-toggle="modal">Add Category</a>
@endsection
@section('content')
    @include('layouts.includes._messages')
    <table class="table table-bordered" id="table1" >
        <thead>
        <tr>
            <th>Id</th>
            <th>Category name</th>
            <th>Category code</th>
            <th>Category status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @if(count($categories))
            @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->category_name }}</td>
            <td>{{ $category->category_code }}</td>
            <td>{{ ($category->category_status == 1) ? 'Active':'Inactive'  }}</td>
            <td><a href="#edit_category" action ="{{ url('update-category/'.$category->id) }}" edit-id="{{ $category->id }}" class="btn btn-small btn-success edit_cat" data-toggle="modal">Edit</a> </td>
            <td><form method="post" action="{{ url('/delete-category/'.$category->id) }}">
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

    <form action="{{ url('/add-category') }}" method="post">
        {{ csrf_field() }}
        <div id="add_category" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Add Category</h3>
            </div>
            <div class="modal-body">

                <div class="row-fluid">
                    <label for="group_name">Category name:</label>
                    <input type="text" name="category_name"  class="span12" required>
                </div>
                <div class="row-fluid">
                    <label for="group_name">Category code:</label>
                    <input type="text" name="category_code"  class="span12" required>
                </div>
                <label for="group_name">Category status:</label>
                <div class="row-fluid">
                    <select name="category_status" class="span12" required>
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

    {{--modal for edit--}}
    <form action="" id="edit-cat-form" method="post">
        {{ csrf_field() }}
        <div id="edit_category" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Edit Category</h3>
            </div>
            <div class="modal-body">

                <div class="row-fluid">
                    <label for="group_name">Category name:</label>
                    <input type="text" name="category_name" id="cat-name"value="" class="span12" required>
                </div>
                <div class="row-fluid">
                    <label for="group_name">Category code:</label>
                    <input type="text" name="category_code" id ="cat-code"class="span12" required>
                </div>
                <label for="group_name">Category status:</label>
                <div class="row-fluid">
                    <select name="category_status" id="cat-status"class="span12" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>

                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="route-id">
                <input type="button" class="btn btn-default" value="Close" data-dismiss="modal">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
@endsection

@push('js')
<script src="{{ URL::asset('src_js/inventory/categories.js') }}"></script>
@endpush
