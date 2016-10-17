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
            {{--<th>Profile</th>--}}
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
                    {{--<td><a href="#view-profile" profile-id="{{ $item->id }}" class="btn btn-small btn-primary profile" data-toggle="modal">Profile</a> </td>--}}
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
    {{--modal for profile data--}}
        <div id="view-profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Item Profile</h3>
            </div>
            <div class="modal-body">
                <div class="row-fluid">

                    <div class="span4"><img src="" alt="" /></div>
                  <div class="span8">
                    <ul class="unstyled span10">
                        <li><strong>Item:</strong> <span id="item-name">  </span></li>
                        <li> <strong>Category: </strong><span id="category"></span></li>
                        <li> <strong>Sub Category: </strong><span id="category"></span></li>
                        <li> <strong>Category: </strong><span id="category"></span></li>
                        <li><span> Sub Category: </span></li>
                        <li><span> Stock level: </span></li>
                    </ul>
                </div>
            </div>
                </div>
            <div class="modal-footer">

            </div>
        </div>
@endsection

@push('js')
<script src="{{ URL::asset('src_js/inventory/items.js') }}"></script>
@endpush
