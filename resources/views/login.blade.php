@extends('layouts.login')

@section('title', 'Login')

@section('content')
    <div id="page-wrapper" class="login-page">
        <!-- Referal section -->
        <div class="mh-fullscreen center-vh moving_background">
            <div class="card card-shadowed login-shadow p-50 w-400">
                <center>
                    <a href="{{ url('/') }}""><img src="template/images/lnks/logo.png" class="w-100 mb-10" style="margin-left:auto; margin-right:auto; margin-top:-20px;"></a>
                </center>
                <h5 class="text-uppercase text-center">Login</h5>
                <h6 class="text-uppercase text-center mb-10" style="font-size: 12px; color: #999;">Don't have an account? <a href="{{ url('/register') }}"" style="color: #0275d8; text-decoration: underline;">Sign up</a></h6>
                <form method="post" class="m-0" action="{{ url('/submit-login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" name="email" required class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" required class="form-control" placeholder="Password">
                    </div>

                   <!--  <div class="form-group flexbox py-10">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" checked="">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember me</span>
                        </label>

                        <a class="text-muted hover-primary fs-13" href="#">Forgot password?</a>
                    </div> -->

                    <div class="form-group">
                        <button class="full-100 btn btn-bold btn-block btn-primary" type="submit">Login</button>
                    </div>
                </form>

                <a class="text-center custom-back-login" href="{{ url('/') }}"">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> back
                </a>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    
@endpush