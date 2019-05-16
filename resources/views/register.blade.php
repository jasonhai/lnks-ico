@extends('layouts.login')

@section('title', 'Register')

@section('content')
    <div id="page-wrapper" class="signup-page">
        <!-- Referal section -->
        <div class="mh-fullscreen center-vh moving_background">
            <div class=" card card-shadowed login-shadow p-40 w-600">
                <center>
                    <a href="{{ url('/') }}""><img src="template/images/lnks/logo.png" class="w-100 mb-10" style="margin-left:auto; margin-right:auto; margin-top:-20px;"></a>
                </center>
                <h5 class="text-uppercase text-center">SIGN UP FOR THE SLV TOKEN SALE</h5>
                <h6 class="text-uppercase text-center mb-10" style="font-size: 12px; color: #999;">ALREADY HAVE AN ACCOUNT? - <a href="{{ url('/login') }}"" style="color: #0275d8; text-decoration: underline;">SIGN IN</a>
                <h5 class="text-uppercase text-center mb-10" style="color:#3152ed; font-weight: bold;"></h5>
                <form method="post" class="m-0" action="{{ url('/submit-register') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="custom-control" for="email">Email</label>
                            <input id="email" type="email" name="email" required class="form-control" placeholder="Email address">
                        </div>

                        <div class="form-group col-md-6 col-left">
                            <label class="custom-control" for="password">Password</label>
                            <input id="password" type="password" name="password" required value="" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group col-md-6 col-right">
                            <label class="custom-control" for="password2">Password (confirmed)</label>
                            <input id="password2" type="password" name="password2" value="" class="form-control" placeholder="Password (confirm)">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="custom-control" for="national-id">National ID or Passport Number</label>
                            <input id="national-id" type="text" name="national-id" value="" class="form-control" placeholder="Optional">
                        </div>

                        <div class="form-group col-md-6 uploads-file">
                            <label class="custom-control">Upload ID Document</label>
                            <img id="doc1">
                            <label class="custom-control custom-file-upload" for="upload-doc"><i class="fa fa-cloud-upload"></i>Upload file</label>
                            <input id="upload-doc" type="file" name="upload-doc" class="form-control hidden-this" placeholder="Upload file">
                            <label id="file-name1" class="custom-control d-block"></label>
                            <p class="notification1 alert alert-danger"></p>
                        </div>

                        <div class="form-group col-md-6 uploads-file">
                            <label class="custom-control" for="upload-photo-id">A selfie holding the identity document (opened, with the photo and ID clearly visible)</label>
                            <img id="doc2">
                            <label class="custom-control custom-file-upload" for="upload-photo-id"><i class="fa fa-cloud-upload"></i>Upload file</label>
                            <input id="upload-photo-id" type="file" name="upload-photo-id" class="form-control hidden-this" placeholder="Upload file">
                            <label id="file-name2" class="custom-control d-block"></label>
                            <p class="notification2 alert alert-danger"></p>
                        </div>



                        <div class="form-group col-md-12 pl-15 pr-15">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" required value="1" class="custom-control-input" style="border: 1px solid #222;">
                                <span class="custom-control-indicator" style="border: 1px solid #222;"></span>
                                <span class="custom-control-description"><small class="fs-11 lh-12 text-dark ">I hereby agree to the <a href="/05.Terms_of_Use_SLV.pdf" target="_blank">Terms &amp; Conditions</a> and the <a href="/06.Privacy_Policy_SLV.pdf" target="_blank">Privacy Policy</a></small></span>
                            </label>
                        </div>

                        <div class="form-group col-md-12 pl-15 pr-15">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms2" required value="3" class="custom-control-input">
                                <span class="custom-control-indicator" style="border: 1px solid #222;"></span>
                                <span class="custom-control-description"><small class=" fw-400 text-dark lh-12">I hereby agree to <a href="/01.Whitepaper_Original_version.pdf" target="_blank">Token Purchase Agreement</a></small></span>
                            </label>
                        </div>

                        <div class="form-group col-md-12">
                            <button class="full-100 btn btn-primary" type="submit">Register</button>
                        </div>
                    </div>

                </form>

                <p class="text-center text-muted fs-13 mt-20">Already have an account? <a href="{{ url('/login') }}"">Sign in</a></p>
            </div>
        </div>

    </div>
@stop