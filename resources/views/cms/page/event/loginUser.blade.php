@extends('cms.template.app')


@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/loginUser.css') }}">
@endsection

@section('content')
    <div class="login-form">
        <div class="row container m-auto py-5">
            <div class="col-md-8 m-auto mt-5">
                <h1 class="login-title">WELCOME TO UMN ECO 2023</h1>

                <form action="/login" method="POST" id="form-login">
                    @csrf
                    <h5 class="mt-3">Email Student</h5>
                    <input type="text" placeholder="eco@student.umn.ac.id"
                        class="form-control @error('email-student') is-invalid @enderror" id="email-student"
                        name="email-student" value="{{ old('email-student') }}">
                    @error('email-student')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <h5 class="mt-3">Password</h5>
                    <input type="password" placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    @if (session('status'))
                        <div style="color:red; margin:10px 0;">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="login-button-container">
                        <button type="submit">
                            Login
                        </button>
                    </div>

                    <p>Doesn't have an account? <a id="register-link" href="/register">Register</a>
                    </p>
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
