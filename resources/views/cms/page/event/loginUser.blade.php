@extends('cms.template.app')


@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/oprecForm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/registration.css') }}">
@endsection

@section('content')
    <div class="row form-regis container m-auto py-5">
        <div class="col-md-8 m-auto mt-5">
            <h1 class="text-light font-weight-bold">Login User</h1>
            @if (session('status'))
                <div style="color:red; font-size:0.7em; margin:auto; text-align:center; margin-bottom:5px;">
                    {{ session('status') }}
                </div>
            @endif

            <form action="/login" method="POST" id="form-login">
                @csrf
                <h5 class="mt-3">Nama Lengkap</h5>
                <input type="text" placeholder="eco@student.umn.ac.id"
                    class="form-control @error('email-student') is-invalid @enderror" id="email-student"
                    name="email-student" value="{{ old('email-student') }}">
                @error('email-student')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <h5 class="mt-3">Password</h5>
                <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror"
                    id="password" name="password" value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <button id="btn-login" type="submit" class="btn btn-primary my-3">
                    <span class="font-weight-bold text-white">Login</span>
                </button>

                <p>Doesn't have an account? <a href="/register">Register</a></p>
            </form>
        </div>
    </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/jquery.validate.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('js/cms/page/event/loginUser.js') }}"></script>
@endsection
