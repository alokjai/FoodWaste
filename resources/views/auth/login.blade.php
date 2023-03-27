@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<section class="login" id="logindiv">

    <div class="container text-center text-white headings">
        <h1 class="text-center mt-4 font-weight-bold">Login <i class="fa fa-sign-in " aria-hidden="true"></i></h1>
        <p class="text-capitalize pt-1">Admin</p>
    </div>

    <div class="row" style="margin: 0;padding: 0;">
        <div class="col-sm-6 ">
            <div class="loginhead">

                <h1>Login Food <i class="fa fa-sign-in " aria-hidden="true"></i> </h1>
                <h3>Admin</h3>
            </div>
        </div>

        <div class="col-sm-6" style="margin: 0;padding: 0;">
            <div class="container login-box">

                <img src="../assets/img/login.png" height="100px" width="100px" class=" mx-auto img-responsive " />
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                      
                        <input type="email" id="email" name="email" placeholder="Email-id" class="form-control login-id @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus />

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <input type="password" id="password" placeholder="P^$w@rd" class="form-control login-id @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class=" d-flex justify-content-center login-button">
                        <button type="submit" class="btn">{{ __('Login') }}</button>
                    </div>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" style="color:white" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif


                </form>
            </div>

        </div>

    </div>


</section>

@endsection
