@extends('cms.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    <div id="dashboard-admin-container" style="background-color: green; z-index: 100;">
        Selamat datang di page user
        <a href="{{ route('scannerPage') }}">tesqr</a>
    </div>
@endsection

@section('custom-js')
@endsection