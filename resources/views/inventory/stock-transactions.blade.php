@extends('layouts.dt')
@section('title','Stock transactions')
@section('page-title','Stock transactions')
@section('page-title-small', 'All stock transactions')
@section('breadcrumbs')
        <li >
            <i class="icon-home"></i>
            <a href="{{ url('/home') }}">Home</a>
            <span class="icon-angle-right"></span>
        </li>
        <li>
            Inventory <span class="icon-angle-right"></span>
        </li>
        <li>Stock transactions</li>
@endsection
@section('widget-title', 'All stock transactions')
@section('actions')
<a href="#add_transaction" class="btn btn-primary btn-small" data-toggle="modal">Create Transaction</a>
    @endsection
@section('content')
    <table class="table table-bordered" id="table1" >
        <thead>
        <tr>
            <th>Id</th>
            <th>Item</th>
            <th>Transaction type</th>
            <th>transaction category</th>
            <th>Warehouse</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        @if(count($transactions))
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->item_id }}</td>
                    <td>{{ $transaction->transaction_type_id }}</td>
                    <td>{{ $transaction->transaction_category_id }}</td>
                    <td>{{ $transaction->warehouse_id }}</td>
                    <td>{{ $transaction->quantity }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @endsection
@section('modals')
    {{--add modal--}}

    <form action="{{ url('/create-transaction') }}" method="post">
        {{ csrf_field() }}
        <div id="add_transaction" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Create a Transaction</h3>
            </div>
            <div class="modal-body">

                <label for="group_name">Inventory Item:</label>
                <div class="row-fluid">
                    <select name="item_id" class="span12" required>
                        <option value="">--Select inventory item--</option>

                    </select>
                </div>
                <label for="group_name">Transaction type:</label>
                <div class="row-fluid">
                    <select name="transaction_type_id" class="span12" required>
                        <option value="">--Select transaction type--</option>

                    </select>
                </div>
                <label for="group_name">Transaction Categoty:</label>
                <div class="row-fluid">
                    <select name="transaction_category_id" class="span12" required>
                        <option value="">--Select transaction category--</option>

                    </select>
                </div>
                <label for="group_name">Warehouse:</label>
                <div class="row-fluid">
                    <select name="warehouse_id" class="span12" required>
                        <option value="">--Select warehouse--</option>

                    </select>
                </div>
                <div class="row-fluid">
                    <label for="group_name">Quantity:</label>
                    <input type="number" name="quantity" class="span12" required>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" value="Close" data-dismiss="modal">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>
    @endsection
