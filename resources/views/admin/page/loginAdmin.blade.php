@extends('admin.template.auth')

@section('container')
    <div id="login-admin-container" class="d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col">
                <h1 class="text-light font-weight-bold">Login Admin</h1>
                @if (session('status'))
                    <div style="color:red; font-size:0.7em; margin:auto; text-align:center; margin-bottom:5px;">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="/loginAdmin" method="post" class="user">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Email address">

                        @error('email')
                        <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                            {{ $message }}
                        </div>
                        @enderror

                        </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">

                                @error('password')
                                <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-user btn-block">
                                <span class="font-weight-bold text-white">Login</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection