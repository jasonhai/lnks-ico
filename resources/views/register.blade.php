@extends('layouts.login')

@section('title', 'Register')

@section('content')
    <div id="page-wrapper" class="signup-page">
        <!-- Referal section -->
        <div class="mh-fullscreen center-vh moving_background">
            <div class=" card card-shadowed login-shadow p-40 w-600">
                <center>
                    <a href="{{ url('/') }}""><img src="template/images/logo_login.png" class="w-100 mb-10" style="margin-left:auto; margin-right:auto; margin-top:-20px;"></a>
                </center>
                <h5 class="text-uppercase text-center">SIGN UP FOR THE GIFCOIN TOKEN SALE</h5>
                <h6 class="text-uppercase text-center mb-10" style="font-size: 12px; color: #999;">ALREADY HAVE AN ACCOUNT? - <a href="{{ url('/login') }}"" style="color: #0275d8; text-decoration: underline;">SIGN IN</a>
                <h5 class="text-uppercase text-center mb-10" style="color:#3152ed; font-weight: bold;">Join now and get 15% Bonus!</h5>
                <form method="post" class="m-0" action="{{ url('/submit-register') }}">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                        <select class="form-control" name="country">
                            <option value="0">*Select Country</option>
                            <option value="1">Albania</option>
                            <option value="2">Andorra</option>
                            <option value="3">Armenia</option>
                            <option value="4">Austria</option>
                            <option value="5">Azerbaijan</option>
                            <option value="48">Algeria</option>
                            <option value="49">Angola</option>
                            <option value="101">Afghanistan</option>
                        </select>
                    </div> -->

                    <div class="form-group">
                        <input type="email" name="email" required class="form-control" placeholder="Email address">
                    </div>

                    <div class="form-group col-12 col-md-6 col-left">
                        <input type="password" name="password" required value="" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group col-12 col-md-6 col-right">
                        <input type="password" name="password2" value="" class="form-control" placeholder="Password (confirm)">
                    </div>

                    <div class="form-group  pl-15 pr-15">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="terms" required value="1" class="custom-control-input" style="border: 1px solid #222;">
                            <span class="custom-control-indicator" style="border: 1px solid #222;"></span>
                            <span class="custom-control-description"><small class="fs-11 lh-12 text-dark ">I hereby agree to the <a href="/index/terms/" target="_blank">Terms &amp; Conditions</a> and the <a href="/index/privacy/" target="_blank">Privacy Policy</a></small></span>
                        </label>
                    </div>

                    <div class="form-group pl-15 pr-15">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="terms2" required value="3" class="custom-control-input">
                            <span class="custom-control-indicator" style="border: 1px solid #222;"></span>
                            <span class="custom-control-description"><small class=" fw-400 text-dark lh-12">I herewith confirm that I am aware of the restrictions applying with respect to the participation in the Token Sale to residents of “Restricted Countries” in the Terms &amp; Conditions of the Token Sale.</small></span>
                        </label>
                    </div>

                    <div class="form-group">
                        <button class="full-100 btn btn-bold btn-block btn-primary" type="submit">Register</button>
                    </div>
                </form>

                <p class="text-center text-muted fs-13 mt-20">Already have an account? <a href="{{ url('/login') }}"">Sign in</a></p>
            </div>
        </div>

    </div>
@stop