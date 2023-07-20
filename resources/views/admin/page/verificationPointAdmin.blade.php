@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
@endsection

@section('content')
    @foreach ($requester as $user)
        <p>User Name: {{ $user->nama }}</p>
        <p>User NIM: {{ $user->nim }}</p>
    @endforeach
    {{-- <form action="/respond" method="post">
        <h3>Nama: {{$requester->nama}}</h3>
        <h3>NIM: {{$requester->$nim}}</h3>
        <label for="point">Poin tambahan:</label>
        <input type="number" name="point" id="point">
        <input type="hidden" id="name" name="name" value={{$nama}}>
        <input type="hidden" id="nim" name="name" value={{$nim}}>
        <button id="acc">approve</button>
    </form> --}}
@endsection

@section('custom-js')
    <script>
       
    </script>
@endsection