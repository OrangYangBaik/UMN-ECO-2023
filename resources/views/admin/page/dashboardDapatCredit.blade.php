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
        <h1>Welcome to Admin Dashboard</h1>
        <a href="/admin/verificationCredit/{{ $boothNum }}"
            style="display: inline-block; margin: 20px 0; color: white;">Wehea Admin
            Control Page</a>
        <table style="margin-bottom: 20px;">
            <tbody>
                @foreach ($allUser as $e)
                    <tr>
                        <td>{{ $e->nama }}</td>
                        <td>{{ $e->nim }}</td>
                        <td>Credit: {{ $e->credit }}</td>
                        <td>Point: {{ $e->point }}</td>
                        @if (count($e->kupon) > 0)
                            @foreach ($e->kupon as $b)
                                <td>Kupon Atasan: {{ $b->atasan }}</td>
                                <td>Kupon Bawahan: {{ $b->bawahan }}</td>
                            @endforeach
                        @else
                            <td>Kupon Atasan: 0</td>
                            <td>Kupon Bawahan: 0</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('custom-js')
@endsection
