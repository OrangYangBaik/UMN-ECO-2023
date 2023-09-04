@extends('admin.template.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/page/verification.css') }}">
@endsection

@section('content')
    <div style="min-height: 100vh;">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (empty($requester))
            <div class="text-white">No Data</div>
        @else
            @foreach ($requester as $user)
                <div class="bg-secondary" style="width: 90vw; margin: auto; padding: 10px 15px; margin-bottom: 15px;">
                    <form class="points-form text-white" action="/admin/addPoints" method="post">
                        @csrf
                        <input type="hidden" name="userId" value="{{ $user->id }}">
                        <p>Nama: {{ $user->nama }}</p>
                        <p>NIM: {{ $user->nim }}</p>
                        <label for="point">Poin tambahan:</label>
                        <input type="number" name="point" id="point" class="point-input text-dark" />
                        <button class="acc-button text-dark" type="submit">Approve</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
@endsection

@section('custom-js')
@endsection
