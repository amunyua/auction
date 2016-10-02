@extends('layouts.dt')
@section('title','Inventory')
@section('page-title','Inventory')
@section('page-title-small', 'All items')
@section('breadcrumbs')
        <li >
            <i class="icon-home"></i>
            <a href="{{ url('/home') }}">Home</a>
            <span class="icon-angle-right"></span>
        </li>
        <li>
            <a href="#">Inverntory</a>
            <span class="icon-angle-right"></span>
        </li>
        <li><a href="#">Items</a></li>
@endsection
@section('widget-title', 'All items')
@section('actions')

    @endsection
@section('')

    @endsection
