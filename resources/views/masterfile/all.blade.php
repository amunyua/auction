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
                <th>Surname</th>
                <th>Firstname</th>
            </tr>
        </thead>
        <tbody>
            @if(count($mfs))
                @foreach($mfs as $mf)
                    <tr>
                        <td>{{ $mf->id }}</td>
                        <td>{{ $mf->surname }}</td>
                        <td>{{ $mf->firstname }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection

@push('js')

@endpush