@extends('auth.layouts')

@section('content')



@if ($message = Session::get('success'))
<div class="alert alert-danger text-center">
    {{ $message }}
</div>
@endif



<div class="row login-box">
    <div class="col-lg-6 align-self-center pad-0">
        <div class="form-section clearfix">
            <div class="logo">
                <a href="{{route("login")}}">
                    <img src="assets/login-register/img/logos/rms-logo-removebg.png" alt="logo" class="rms-logo">
                </a>
            </div>
            <h3>Recover Your Password</h3>
            <form action="{{route("password.email")}}" method="POST">
                @csrf
                <div class="form-group clearfix">
                    <div class="form-box">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email Address"
                       @error('email') is-invalid @enderror>
                        <i class="flaticon-mail-2"></i>
                        @if ($errors->has("email"))
                        <span class=" text-warning">{{$errors->first("email")}}</span>
                        @endif
                    </div>
                </div>
              
                <div class="form-group clearfix">
                    <button type="submit" class="btn btn-primary btn-lg btn-theme w-100">Send Me Email</button>
                </div>
            </form>
            <p>Already a member? <a href="{{route("login")}}">Login here</a></p>
        </div>
    </div>
    <div class="col-lg-6 align-self-center pad-0 bg-img">
        <div class="info clearfix">
            <div class="content-container">
                <h1>WELCOME TO RMS</h1>
                <div class="image-container">
                    <img src="assets/img/logos/login-illustrate.png" alt="" class="login-illustrate">
                    <h5>Please send an email to stay connected with us.</h5>
                    <button type="button" class="google-btn">Continue with Google</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection