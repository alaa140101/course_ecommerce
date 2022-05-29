@extends('layouts.admin-auth')


@section('content')    
<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <form class="user" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username"
                        id="exampleInputUserName" aria-describedby="usernameHelp"
                        placeholder="Enter Your Username..." value="{{old('username')}}">
                        @error('username') <span class="text-danger">{{$message}}</span>   @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password" name="password">
                        @error('password') <span class="text-danger">{{$message}}</span>   @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{old('remember') ? 'checked':''}}>
                        <label class="custom-control-label" for="remember">Remember
                            Me</label>                        
                    </div>
                </div>
                <button type="submit"class="btn btn-primary btn-user btn-block">Login</button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{route('admin.forgot-password')}}">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>

@endsection
