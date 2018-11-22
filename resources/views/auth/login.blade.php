@extends('layouts.app')
    @section('content')
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <label class="checkbox">
                <input class="form-check-input" type="checkbox" name="remember" value="remember-me" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <!--<span class="pull-right"> <a href="#"> Forgot Password?</a></span>-->
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </label>
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                {{ __('Login') }}
            </button>
            <button class="btn btn-info btn-lg btn-block" type="submit">{{ __('Signup') }}</button>
        </div>
    </form>
    @endsection



