@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center mb-3">
            <img src="image/logo/smkn2.png" class="img-fluid mb-4" width="100" alt="">

            <h2>SELAMAT DATANG DI ADMIN TECHNOPARK GALLERY</h2>
            <h2>SMKN 2 BANJARMASIN</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                            </div>
                            <div class="col-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
