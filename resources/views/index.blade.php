@extends('layouts.main-layout')
@section('title','Dashboard')
@section('content')
<!--begin::Login-->
<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
    <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('public/assets/media/bg/banner.png');">
        <div class="login-form text-center p-7 position-relative overflow-hidden">
            <!--begin::Login Header-->
            <div class="d-flex flex-center mb-15">
                <a href="#">
                    <img src="https://i0.wp.com/classaclub.com/wp-content/uploads/2022/03/logo.png?fit=128%2C63&ssl=1" class="max-h-75px" alt="" />
                </a>
            </div>
            <!--end::Login Header-->
            <!--begin::Login Sign in form-->
            <div class="card login-card text-left">
                <div class="card-body">
                    <div class="login-signin">
                        <div class="row text-left signin-card">
                            <div class="col-md-12">
                                <h2>Sign In</h2>
                                <p>New Here ? <a href="register.html">Create Account</a></p>
                            </div>
                        </div>
                        <form class="form mt-4" id="kt_login_signin_form">
                            <div class="form-group mb-5">
                                <label class="lable-control field-bold">
                                    Email
                                </label>
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text"  name="email" autocomplete="off" />
                            </div>
                            <div class="form-group mb-5">
                                <label class="lable-control field-bold">
                                    Password
                                </label>
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" name="password" />
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                <div class="checkbox-inline">
                                    <label class="checkbox m-0 text-muted">
                                        <input type="checkbox" name="remember" />
                                        <span></span>
                                        Remember me
                                    </label>
                                </div>
                                <a href="javascript:;" id="kt_login_forgot" class="text-hover-primary forgot-password">Forget Password ?</a>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="new-dashboard.html"  class="btn btn-block btn-primary font-weight-bold px-9 py-4">Sign In</a>
                                </div>      
                            </div>
                        </form>
                    </div>

                    <!--begin::Login forgot password form-->
                        <div class="login-forgot">

                            <div class="row text-left signin-card">
                                <div class="col-md-12">
                                    <div class="mb-8">
                                        <h2>Forgotten Password?</h2>
                                        <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
                                    </div>
                                </div>
                            </div>

                            <form class="form" id="kt_login_forgot_form">
                                <div class="form-group mb-10">
                                    <label class="lable-control field-bold">
                                        Email Address
                                    </label>
                                    <input class="form-control form-control-solid h-auto py-4 px-8" type="text" name="email" autocomplete="off" />
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-block btn-primary font-weight-bold px-9 py-4 ">Send Reset Link</button>
                                    </div>
                                </div>

                                <div class="row text-center mt-3">
                                    <div class="col-md-12">
                                        <p class="remember-password-link">Remember Password? <a href="" id="kt_login_signin_form" class="text-hover-primary forgot-password">Login ?</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Login forgot password form-->

                </div>
            </div>
            <!--end::Login Sign in form-->
        </div>
    </div>
</div>
<!--end::Login-->
@endsection