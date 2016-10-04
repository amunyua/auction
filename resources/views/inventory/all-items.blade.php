@extends('layouts.dt')
@section('title','All items')
@section('page-title','Manage inventory')
@section('page-title-small', 'All items')
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
    <li><a href="#">Manage Inventory</a></li>
@endsection
@section('widget-title', 'Manage Inventory')
@section('actions')
    {{--<a href="#add_category" class="btn btn-primary" data-toggle="modal">Add Category</a>--}}
@endsection
@section('content')
    @include('layouts.includes._messages')
    <table class="table table-bordered" id="table1" >
        <thead>
        <tr>
            <th>Id</th>
            <th>Item</th>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Status</th>
            <th>Stock level</th>
            {{--<th>Edit</th>--}}
            {{--<th>Delete</th>--}}
        </tr>
        </thead>
        <tbody>
        @if(count($items))
            @foreach($items as $item)
                <?php
                    $category = \App\Category::find($item->category_id);
                        $subcategory = \App\SubCategory::find($item->sub_category_id);
                ?>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->item_name }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $subcategory->sub_category_name }}</td>
                    <td>{{ ($item->item_status == 't') ? 'Active':'Inactive'  }}</td>
                    <td>{{ $item->stock_level }}</td>
                    {{--<td><a href="#edit_item" edit-id="{{ $item->id }}" class="btn btn-small btn-success edit_cat" data-toggle="modal">Edit</a> </td>--}}
                    {{--<td><form method="post" action="">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<input type="submit" name="DELETE" value="Delete" class="btn btn-danger btn-small delete_category">--}}
                            {{--{{ method_field('DELETE') }}--}}
                        {{--</form>--}}
                    {{--</td>--}}
                </tr>
            @endforeach
        @endif
        </tbody>

    </table>

@endsection
@section('modals')


    {{--modal for edit--}}
    <form action="{{ url('') }}" id="" method="post">
        {{ csrf_field() }}
        <div id="edit_item" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Edit inventory item</h3>
            </div>
            <div class="modal-body">

                <div class="row-fluid">
                    <label for="group_name">item name:</label>
                    <input type="text" name="category_name" id="cat-name"value="" class="span12" required>
                </div>
                {{--<div class="row-fluid">--}}
                    {{--<label for="group_name">Category code:</label>--}}
                    {{--<input type="text" name="category_code" id ="cat-code"class="span12" required>--}}
                {{--</div>--}}
                {{--<label for="group_name">Category status:</label>--}}
                {{--<div class="row-fluid">--}}
                    {{--<select name="category_status" id="cat-status"class="span12" required>--}}
                        {{--<option value="1">Active</option>--}}
                        {{--<option value="0">Inactive</option>--}}
                    {{--</select>--}}

                {{--</div>--}}
            {{--</div>--}}
            <div class="modal-footer">
                <input type="text" id="route-id">
                <input type="button" class="btn btn-default" value="Close" data-dismiss="modal">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
@endsection

@push('js')
{{--<script src="{{ URL::asset('src_js/inventory/categories.js') }}"></script>--}}
@endpush
