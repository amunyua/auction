@extends('layouts.dt')
@section('title', 'All Masterfiles')
@section('page-title', 'All Masterfiles')

@section('breadcrumb')
    <li></li>
@endsection

@section('actions')
    <span class="actions">

    </span>
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