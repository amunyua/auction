@extends('layouts.dt')
@section('title', 'Add New Masterfile')

@section('breadcrumb')
    <li>
        <i class="icon-home"></i>
        <a href="{{ url('/') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <a href="#">Masterfile</a>
        <span class="icon-angle-right"></span>
    </li>
    <li><a href="#">Add New Masterfile</a></li>
@endsection

@section('wizard-id', 'form_wizard_1')

@section('wizard-title')
    <i class="icon-reorder"></i> Add New Masterfile - <span class="step-title">Step 1 of 4</span>
@endsection

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
                <th>Buss Role</th>
                <th>Edit</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
        @if(count($mfs))
            @foreach($mfs as $mf)
                <tr>
                    <td>{{ $mf->id }}</td>
                    <td>{{ $mf->reg_date }}</td>
                    <td>{{ $mf->surname }}</td>
                    <td>{{ $mf->firstname }}</td>
                    <td>{{ $mf->customer_type_id }}</td>
                    <td>{{ $mf->email }}</td>
                    <td>{{ $mf->b_role }}</td>
                    <td><a href="" class="btn btn-mini"><i class="icon-edit"></i>Edit</a> </td>
                    <td><a href="" class="btn btn-small btn-success edit_cat" >Profile</a> </td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

@push('js')

@endpush