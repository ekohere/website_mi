@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
    @include('frontend.include.library-top')
    @yield('library-top')
</head>
    <body>
    <div class="body">
            @include('frontend.include.header')

            @section('content')




                <div class="container">

                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">

                            <div class="featured-boxes">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="featured-box featured-box-primary align-left mt-xlg">
                                            <div class="box-content">
                                                <h4 class="heading-primary text-uppercase mb-md">I'm a Returning Customer</h4>
                                                    <form method="POST" action="{{ url('/login')}}">
                                                        {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="email">E-mail Address</label>
                                                                <input id="email" type="text" value="" class="form-control input-lg" name="email" value="{{ old('email') }}" required autofocus>
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <a class="pull-right" href="{{ url('/password/reset') }}">(Lost Password?)</a>
                                                                <label for="password">Password</label>
                                                                <input id="password" type="password" value="" class="form-control input-lg" name="password" required>
                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span class="remember-box checkbox">
                                                                <label for="rememberme">
                                                                    <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @include('frontend.include.footer')
            @endsection
            @yield('library-bottom')
            @include('frontend.include.library-bottom')

    </div>
    </body>
</html>








