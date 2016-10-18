@extends('layouts.dt')
@section('title','All Customers')
@section('page-title','CRM')
@section('page-title-small', 'Customers Record')
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
@section('widget-title', 'Customers Record')
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
        @if(count($customers))
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->reg_date }}</td>
                    <td>{{ $customer->surname }}</td>
                    <td>{{ $customer->firstname }}</td>
                    <td>{{ $customer->customer_type_name }}</td>
                    <td>{{ $customer->email }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

@push('js')

@endpush