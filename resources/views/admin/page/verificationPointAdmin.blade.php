@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    @foreach ($requester as $user)
        <form action="{{ route('add.points', ['userId' => $user->id]) }}" method="post">
            @csrf
            <h3>Nama: {{ $user->nama }}</h3>
            <h3>NIM: {{ $user->nim }}</h3>
            <label for="point">Poin tambahan:</label>
            <input type="number" name="point" id="point">
            <button id="acc" type="submit">approve</button>
        </form>
    @endforeach
@endsection

@section('custom-js')
@endsection
