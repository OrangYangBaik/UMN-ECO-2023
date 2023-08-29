@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    <div id="dashboard-admin-container text-white">Selamat datang di page admin</div>
    <a href="verificationPoint/{{$boothNum}}">verification page</a>
@endsection

@section('custom-js')
@endsection
