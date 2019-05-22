{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">{{ __('Login') }}</div>--}}

                    {{--<div class="card-body">--}}
                        {{--<form method="POST" action="{{ route('login') }}">--}}
                            {{--@csrf--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="email"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email"--}}
                                           {{--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
                                           {{--name="email" value="{{ old('email') }}" required autofocus>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<label for="password"--}}
                                       {{--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password"--}}
                                           {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                                           {{--name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                                {{--<div class="col-md-6 offset-md-4">--}}
                                    {{--<div class="form-check">--}}
                                        {{--<input class="form-check-input" type="checkbox" name="remember"--}}
                                               {{--id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                        {{--<label class="form-check-label" for="remember">--}}
                                            {{--{{ __('Remember Me') }}--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row mb-0">--}}
                                {{--<div class="col-md-8 offset-md-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--{{ __('Login') }}--}}
                                    {{--</button>--}}

                                    {{--@if (Route::has('password.request'))--}}
                                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                            {{--{{ __('Forgot Your Password?') }}--}}
                                        {{--</a>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Procurement System (Admin)</title>

        <link rel="stylesheet" href="{{url('/')}}/public/asset/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
        <link rel="stylesheet" href="{{url('/')}}/public/asset/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="{{url('/')}}/public/asset/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="{{url('/')}}/public/asset/vendors/css/vendor.bundle.addons.css">
        <link rel="stylesheet" href="{{url('/')}}/public/asset/css/style.css">
        <link rel="shortcut icon" href="{{url('/')}}/public/asset/images/favicon.png" />
    </head>

    <body>





    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">

            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        e - TENDER
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100 mx-auto">
                    <div class="col-lg-4 mx-auto">

                        <h2 style="color:white; text-align:center; margin-bottom: 20px;">e - TENDER</h2>

                        <div class="auto-form-wrapper">

                            <h3 class="text-center">Sign in</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="label">E-Mail Address</label>
                                    <div class="input-group">
                                        <input style="border: 1px solid #c7c6c5;" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input style="border: 1px solid #c7c6c5;" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">

                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Keep me signed in
                                        </label>
                                    </div>
                                    {{--<a href="#" class="text-small forgot-password text-black">Forgot Password</a>--}}

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Password
                                        </a>
                                    @endif

                                </div>
                            </form>

                        </div>
                        <ul class="auth-footer">
                            <li><a href="#">Conditions</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                        <p class="footer-text text-center">copyright © 2019 Tech Cloud. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('/')}}/public/asset/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{url('/')}}/public/asset/vendors/js/vendor.bundle.addons.js"></script>
    <script src="{{url('/')}}/public/asset/js/template.js"></script>

    </body>

</html>