@extends('layouts.app')

@section('breadcrumb')
 <!-- breadcrumb-section -->
 <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>{{__("Login to our website")}}</p>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- end breadcrumb section -->
    
@endsection

@section('content')

<section>
    <div class="py-5">
        <div class="d-flex justify-content-center"> 
            <div class="col-md-6">
            <h3>{{__("Login")}}</h3>
            <form method="POST" action="{{ route('login') }}">        
                @csrf               
                <div class="row mb-3">
                    <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
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
                    <div class="d-flex justify-content-around">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>


                        @if (Route::has('register'))
                            <a href="{{route('register')}}" class="btn btn-secondary float-right">
                            {{__('Have\'t an account3?')}}
                            </a>                            
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>        
@endsection
