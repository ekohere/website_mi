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

<div role="main" class="main">

                <section class="page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Pages</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Register</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-3">

                            <div class="featured-boxes">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="featured-box featured-box-primary align-left mt-xlg">
                                            <div class="box-content">
                                                <h4 class="heading-primary text-uppercase mb-md">Register An Account</h4>
                                                
                                                <form method="POST" action="{{ url('/register') }}">
                                                {{ csrf_field() }}      
                                                    
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="name">Name</label>
                                                                <input id="name" type="text" class="form-control input-lg" name="name" value="{{ old('name') }}" required autofocus>
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                <label for="email">E-mail Address</label>
                                                                <input id="email" type="text" class="form-control input-lg" name="email" value="{{ old('email') }}" required>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif        
                                                            </div>
                                                            </div>
                                                        </div>    
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-6">

                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                            
                                                                <label for="password">Password</label>
                                                                <input id="password" type="password" class="form-control input-lg" name="password" required>
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif        
                                                            </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <label for="password-confirm">Re-enter Password</label>
                                                                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="submit" value="Register" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
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


                