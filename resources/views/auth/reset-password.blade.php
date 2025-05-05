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
                    <img src="{{ asset('assets/login-register/img/logos/rms-logo-removebg.png') }}" alt="logo" class="rms-logo">
                </a>
            </div>
            <h3>Reset Password</h3>
            <form action="{{ route("password.update") }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group clearfix">
                    <div class="form-box">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" value="{{ old('email') }}"
                       @error('email') is-invalid @enderror>
                        <i class="flaticon-mail-2"></i>
                        @if ($errors->has("email"))
                        <span class="text-warning">{{$errors->first("email")}}</span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group clearfix">
                    <div class="form-box">
                        <input name="password" type="password" class="form-control" autocomplete="off" id="password"
                            placeholder=" New Password" aria-label="Password" @error("password") is-invalid @enderror> 
                            <i class="flaticon-password"></i>
                         
                        @if($errors->has("password"))
                        <span class="text-warning">{{$errors->first("password")}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="form-box">
                        <input name="password_confirmation" type="password" class="form-control" autocomplete="off"
                            id="password_confirmation" placeholder="Confirm Password" aria-label="Password"
                            @error("password_confirmation") is-invalid @enderror> <i class="flaticon-password"></i>
                        @if($errors->has("password_confirmation"))
                        <span class="text-warning">{{$errors->first("password_confirmation")}}</span>
                        @endif
                    </div>
                </div>
             
              
                <div class="form-group clearfix">
                    <button type="submit" class="btn btn-primary btn-lg btn-theme w-100">Reset Password</button>
                </div>
            </form>

        </div>
    </div>
    <div class="col-lg-6 align-self-center pad-0 bg-img">
        <div class="info clearfix">
            <div class="content-container">
                <h1>WELCOME TO RMS</h1>
                <div class="image-container">
                    <img src="{{ asset('assets/login-register/img/logos/login-illustrate.png') }}" alt="" class="login-illustrate">
                    <h5>Login with your personal info or continue with Google to stay connected with us.</h5>
                    <button type="button" class="google-btn">Continue with Google</button>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection