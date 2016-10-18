@extends('layouts.dt')
@section('title','All Suppliers')
@section('page-title','CRM')
@section('page-title-small', 'Suppliers Record')
@section('breadcrumbs')
    <li >
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <span href="#">CRM</span>
        <span class="icon-angle-right"></span>
    </li>
    <li><span>All Customers</span></li>
@endsection
@section('widget-title', 'Suppliers Record')
@section('content')
    <table id="table1" class="table table-bordered">
        <thead>
        <tr>
            <th>MF#</th>
            <th>Created Date</th>
            <th>Surname</th>
            <th>Firstname</th>
            <th>Customer Type</th>
            <th>E-mail</th>
        </tr>
        </thead>
        <tbody>
        @if(count($suppliers))
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->reg_date }}</td>
                    <td>{{ $supplier->surname }}</td>
                    <td>{{ $supplier->firstname }}</td>
                    <td>{{ $supplier->customer_type_name }}</td>
                    <td>{{ $supplier->email }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

@push('js')

@endpush