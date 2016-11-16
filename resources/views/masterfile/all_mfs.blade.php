@extends('layouts.dt')
@section('title','All Masterfile')
@section('page-title','Masterfile')
@section('page-title-small', 'Masterfile Record')
@section('breadcrumbs')
    <li >
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <span href="#">Masterfile</span>
        <span class="icon-angle-right"></span>
    </li>
    <li><span>All Masterfile</span></li>
@endsection

@section('wizard-id', 'form_wizard_1')

@section('wizard-title')
    <i class="icon-reorder"></i> Add New Masterfile - <span class="step-title">Step 1 of 4</span>
@endsection

@section('content')
    @include('layouts.includes._messages')
    <table id="table1" class="live_table table table-bordered">
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
                    <td>{{ $mf->customer_type_name }}</td>
                    <td>{{ $mf->email }}</td>
                    <td>{{ $mf->b_role }}</td>
                    <td><a href="{{ url('edit_mf/'.$mf->id) }}" class="btn btn-small edit_cat"><i class="icon-edit"></i> Edit</a> </td>
                    <td><a href="{{ url('mf-profile/'.$mf->id) }}" class="btn btn-small btn-info edit_cat" ><i class="icon-eye-open"></i> Profile</a> </td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

@push('js')

@endpush