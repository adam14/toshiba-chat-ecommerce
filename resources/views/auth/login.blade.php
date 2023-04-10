@extends('layouts.default_auth')

@section('content')
<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1">Welcome to Toshiba Chat E-Commerce! 👋</h2>
        <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
        <form class="auth-login-form mt-2" action="{{ route('loginAction') }}" method="POST"> @csrf
            <div class="mb-1">
                <label class="form-label" for="login-email">Email</label>
                <input class="form-control" id="login-email" type="text" name="login-email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" value="testing@gmail.com" />
            </div>
            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="login-password">Password</label><!--<a href="auth-forgot-password-cover.html"><small>Forgot Password?</small></a>-->
                </div>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="login-password" type="password" name="login-password" placeholder="············" aria-describedby="login-password" tabindex="2" value="testing" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                </div>
            </div>
            <!--
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                    <label class="form-check-label" for="remember-me"> Remember Me</label>
                </div>
            </div>
            -->
            <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
        </form>
        <!--
        <p class="text-center mt-2"><span>New on our platform?</span><a href="auth-register-cover.html"><span>&nbsp;Create an account</span></a></p>
        <div class="divider my-2">
            <div class="divider-text">or</div>
        </div>
        <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i data-feather="mail"></i></a><a class="btn btn-github" href="#"><i data-feather="github"></i></a></div>
        -->
    </div>
</div>
@endsection