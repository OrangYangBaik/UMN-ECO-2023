@extends('admin.template.main')

@section('container')
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Now!</h1>
                            </div>

                            @if (session('status'))
                                <div style="color:red; font-size:0.7em; margin:auto; text-align:center; margin-bottom:5px;">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="/registerAdmin" method="post" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="name" class="form-control form-control-user"
                                        id="name" name="name" aria-describedby="Name Help"
                                        placeholder="Enter Your Name...">
                                    @error('name')
                                        <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="email" name="email" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                    @error('email')
                                        <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="password" name="password" placeholder="Password">
                                    @error('password')
                                        <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="code" class="form-control form-control-user"
                                        id="code" name="code" placeholder="Enter admin code">
                                    @error('code')
                                        <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection