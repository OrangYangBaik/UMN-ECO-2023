@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    @foreach ($requester as $user)
        <form class="points-form text-white" action="/addPoints" method="post">
            @csrf
            <input type="hidden" name="userId" value="{{ $user->id }}">
            <h3>Nama: {{ $user->nama }}</h3>
            <h3>NIM: {{ $user->nim }}</h3>
            <label for="point">Poin tambahan:</label>
            <input type="number" name="point" id="point" class="point-input">
            <button class="acc-button" type="submit">Approve</button>
        </form>
    @endforeach
@endsection

@section('custom-js')
@endsection
