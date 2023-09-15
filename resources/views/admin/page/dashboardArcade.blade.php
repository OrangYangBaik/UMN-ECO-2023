@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/dashboardAdmin.css') }}">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid white;
            /* Set border color to white */
        }

        th,
        td {
            padding: 10px;
            /* Add padding */
        }
    </style>
@endsection

@section('content')
    <div class="container text-white">
        <div id="dashboard-admin-container text-white">Selamat datang di page admin</div>
        <a href="/admin/verificationPoint/{{ $boothNum }}">verification page</a>
        <table>
            <tbody>
                @foreach ($allUser as $e)
                    <tr>
                        <td>{{ $e->nama }}</td>
                        <td>{{ $e->nim }}</td>
                        <td>Credit: {{ $e->credit }}</td>
                        <td>Point: {{ $e->point }}</td>
                        @foreach ($e->kupon as $b)
                            <td>Kupon Atasan: {{ $b->atasan }}</td>
                            <td>Kupon Bawahan: {{ $b->bawahan }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('custom-js')
@endsection
