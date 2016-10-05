@extends('layouts.form-layout')
@section('title','Edit Masterfile')
@section('page-title','Edit Masterfile')
@section('page-title-small', 'Masterfile')
@section('breadcrumbs')
    <li >
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <a href="{{ url('/all_mfs') }}">All Masterfile</a>
        <span class="icon-angle-right"></span>
    </li>
    <li><span>Edit Masterfile</span></li>
@endsection
@section('widget-title', 'Edit Masterfile')
@section('content')
    {{ var_dump($mf) }}
@endsection