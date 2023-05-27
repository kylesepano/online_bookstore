@extends('layouts.app')

@section('content')
    <div class="bg-gradient-primary" style="height: 100vh">
        <div class="container pt-5">
            <div class="card  o-hidden border-0 shadow-lg ">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block"
                            style="  background: url({{ asset('design/website.png') }});
                        background-position: center;
                        background-size: cover;">
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="post" action="{{ route('reg') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleFirstName" placeholder="First Name" name="first_name" required
                                                value="{{ old('first_name') }}">
                                            @error('first_name')
                                                <label class="text-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleLastName" placeholder="Last Name" name="last_name" required
                                                value="{{ old('last_name') }}">
                                            @error('last_name')
                                                <label class="text-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Email Address" name="email" required
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <label class="text-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Username" name="username" required
                                                value="{{ old('username') }}">
                                            @error('username')
                                                <label class="text-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                            @error('password')
                                                <label class="text-danger">{{ $message }}</label>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repeat Password"
                                                name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                    <hr>
                                    {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a> --}}
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
