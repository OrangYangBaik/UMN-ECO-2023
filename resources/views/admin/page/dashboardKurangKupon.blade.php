@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    <div class="container text-white">
        <div id="dashboard-admin-container text-white">Selamat datang di page admin</div>
        <a href="/admin/verificationDecreaseKupon/{{ $boothNum }}">verification page</a>
    </div>
@endsection

@section('custom-js')
@endsection
