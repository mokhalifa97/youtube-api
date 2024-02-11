@extends('layout')
@section('title','Sign Up')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(images/bg-2.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign Up</h3>
                        </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="/auth/google" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
                                    </p>
                                </div>
                    </div>
                    <div>
                        @if (session('regerror'))
                                    <div class="alert alert-danger" >{{session('regerror')}}</div>
                                @endif
                    </div>
                <form action="{{route('registration')}}" class="signin-form" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="username" required>
                        <label class="form-control-placeholder" for="username">Username</label>
                    </div>

                    <div class="form-group mt-3">
                        <input type="email" name="email" class="form-control" required>
                        <label class="form-control-placeholder" for="username">Email</label>
                    </div>
                    
                    <div class="form-group">
                    <input id="password-field" type="password" class="form-control" name="password" required>
                    <label class="form-control-placeholder" for="password">Password</label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="form-group">
                        <a type="button" href="/auth/google" class="form-control btn btn-primary rounded px-3"><span class="fa fa-google"></span> With Google</a>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50 text-left">
                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                    </div>
                </form>
                <p class="text-center">Back to <a href="{{route('login')}}">LogIn</a></p>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection



