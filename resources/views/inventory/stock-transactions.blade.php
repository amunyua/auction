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
