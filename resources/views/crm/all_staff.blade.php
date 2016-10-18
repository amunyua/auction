@extends('layouts.dt')
@section('title','All Staff')
@section('page-title','CRM')
@section('page-title-small', 'Staff Records')
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
@section('widget-title', 'Staff Records')
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
        @if(count($staffs))
            @foreach($staffs as $staff)
                <tr>
                    <td>{{ $staff->id }}</td>
                    <td>{{ $staff->reg_date }}</td>
                    <td>{{ $staff->surname }}</td>
                    <td>{{ $staff->firstname }}</td>
                    <td>{{ $staff->customer_type_name }}</td>
                    <td>{{ $staff->email }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

@push('js')

@endpush