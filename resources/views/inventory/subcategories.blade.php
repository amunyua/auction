@extends('layouts.dt')
@section('title','Manage Sub Categories')
@section('page-title','Manage sub categories')
@section('page-title-small', 'Item sub category')
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
    <li><a href="#">Manage sub categories</a></li>
@endsection
@section('widget-title', 'Manage sub categories')
@section('actions')
    <a href="#add_subcategory" class="btn btn-primary" data-toggle="modal">Add a SubCategory</a>
@endsection
@section('content')
    @include('layouts.includes._messages')
    <table class="table table-bordered" id="table1" >
        <thead>
        <tr>
            <th>Id</th>
            <th>Sub Category name</th>
            <th>Belongs to</th>
            <th>Sub Category code</th>
            <th>Sub Category status</th>
        </tr>
        </thead>
        <tbody>
        @if(count($subcategories))
            @foreach($subcategories as $subcategory)
                <tr>
                    <td>{{ $subcategory->id }}</td>
                    <td>{{ $subcategory->sub_category_name }}</td>
                    <td></td>
                    <td>{{ $subcategory->sub_category_code }}</td>
                    <td>{{ $subcategory->sub_category_status }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection
@section('modals')
    {{--modal for add--}}

    <form action="{{ url('/add-subcategory') }}" method="post">
        {{ csrf_field() }}
        <div id="add_subcategory" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Add A Category</h3>
            </div>
            <div class="modal-body">
                <label for="group_name">Sub Category name:</label>
                <div class="row-fluid">
                    <select class="span12 " name="category_id" select2>
                        <option value="">--Select a category--</option>
                    @if(count($categories))
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                            @endif

                    </select>
                </div>
                <div class="row-fluid">
                    <label for="group_name">Sub Category name:</label>
                    <input type="text" name="sub_category_name" value="" class="span12" required>
                </div>
                <div class="row-fluid">
                    <label for="group_name">Sub Category code:</label>
                    <input type="text" name="sub_category_code" class="span12" required>
                </div>
                <label for="group_name">Sub Category status:</label>
                <div class="row-fluid">
                    <select name="sub_category_status" class="span12" required>
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
@endsection
