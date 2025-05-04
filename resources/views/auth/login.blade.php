@extends('auth.layouts')

@section('content')



@if ($message = Session::get('success'))
<div class="alert alert-danger text-center">
    {{ $message }}
</div>
@endif

<div class="row login-box">
    <div class="col-lg-6 align-self-center pad-0">
        <div class="form-section align-self-center">
            <div class="logo">
                <a href="{{route("login")}}">
                    <img src="assets/login-register/img/logos/rms-logo-removebg.png" alt="logo" class="rms-logo">
                </a>
            </div>
            <h3>Sign Into Your Account</h3>
            <form action="{{route("authenticate")}}" method="POST">
                @csrf
                <div class="form-group clearfix">
                    <div class="form-box">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email Address"
                       @error('email') is-invalid @enderror>
                        <i class="flaticon-mail-2"></i>
                        @if ($errors->has("email"))
                        <span class="text-warning">{{$errors->first("email")}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="form-box">
                        <input name="password" type="password" class="form-control" id="password"placeholder="Password" aria-label="Password" 
                        @error('password') is-invalid @enderror>
                        <i class="flaticon-password"></i>
                        @if ($errors->has("password"))
                        <span class="text-warning">{{$errors->first("password")}}</span>
                        @endif
                    </div>
                </div>
                <div class="checkbox form-group clearfix">
                    <div class="form-check float-start">
                        <input class="form-check-input" type="checkbox" id="rememberme">
                        <label class="form-check-label" for="rememberme">
                            Remember me
                        </label>
                    </div>
                    <a href="{{route("password.request")}}" class="link-light float-end forgot-password">Forgot your password?</a>
                </div>
                <div class="form-group clearfix">
                    <button type="submit" class="btn btn-primary btn-lg btn-theme w-100">Login</button>
                </div>
            </form>

            <p>Don't have an account? <a href="{{route('register')}}">Register here</a></p>
        </div>
    </div>
    <div class="col-lg-6 align-self-center pad-0 bg-img">
        <div class="info clearfix">
            <div class="content-container">
                <h1>WELCOME TO RMS</h1>
                <div class="image-container">
                    <img src="assets/login-register/img/logos/login-illustrate.png" alt="" class="login-illustrate">
                    <h5>Login with your personal info or continue with Google to stay connected with us.</h5>
                    <button type="button" class="google-btn">Continue with Google</button>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection