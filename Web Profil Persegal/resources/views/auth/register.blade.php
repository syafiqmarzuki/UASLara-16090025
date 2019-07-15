@extends('layouts.app')

@section('content')
    <div class="wrapper-page">
        <div class="card overflow-hidden account-card mx-3">
            <div class="bg-primary p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">Free Register</h4>
                <p class="text-white-50 mb-4">Get your free Veltrix account now.</p>
                <a href="{{ url('/') }}" class="logo logo-admin"><img src="{{ asset('assets/images/iconp.png')}}" height="24" alt="logo"></a>
            </div>
            <div class="account-card-content">
                <form class="form-horizontal m-t-30" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group row m-t-20">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                        </div>
                    </div>
                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">
                            <p class="mb-0">
                                By registering you agree to the Veltrix <a href="#" class="text-primary">Terms of Use</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="m-t-40 text-center">
            <p>
                Already have an account ? <a href="{{ route('login') }}" class="font-500 text-primary">Login</a>
            </p>
            <p>
                © 2019 Persegal Official <span class="d-none d-sm-inline-block">- Created by Syafiq Marzuki</span>
            </p>
        </div>
    </div>

@endsection
