@extends('layouts.dt')
@section('title', 'All Customers')
@section('page-title', 'CRM')
@section('widget-title', 'All Customers')

@push('js')
    <script src="{{ URL::asset('src_js/crm/all_customers.js') }}"></script>
@endpush

@section('breadcrumbs')
    <li>
        <i class="icon-home"></i>
        <a href="index.php">Home</a>
        <span class="icon-right-angle"></span>
    </li>
    <li>
        <span href="#">CRM</span>
        <span class="icon-right-angle"></span>
    </li>
    <li><span>All Customers</span></li>
@endsection

@section('content')
    <table id="all_customers" class="table table-bordered">
        <thead>
        <tr>
            <th>Id#</th>
            <th>Full Name</th>
            <th>E-mail</th>
            <th>Buss Role</th>
            <th>Masterfile Type</th>
            <th>Reg Date</th>
        </tr>
        </thead>
    </table>
@endsection