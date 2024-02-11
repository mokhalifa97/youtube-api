    @extends('layout')
    @section('title','Login')

    @section('content')
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="wrap">
                            <div class="img" style="background-image: url(images/bg-1.jpg);"></div>
                            <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">LogIn</h3>
                            </div>
                                    <div class="w-100">
                                        <p class="social-media d-flex justify-content-end">
                                            <a href="/auth/google" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
                                        </p>
                                    </div>
                        </div>
                        <div>
                            @if (session('error'))
                                        <div class="alert alert-danger" >{{session('error')}}</div>
                                    @endif
                        </div>
                    <form action="{{route('login.user')}}" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" required>
                            <label class="form-control-placeholder" for="email">Email</label>
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
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">LogIn</button>
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
                    <p class="text-center">Not a member? <a href="{{route('signup')}}"> Sign Up</a>
                    </p>
                    </div>
                    
                </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection



