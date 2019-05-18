@extends('layouts.app')

@section('content')
<body style="background-image: url('img/Loginn.jpeg');">
    <div class="container">
        <div class="row justify-content-center pt-4">
            <div class="card col-md-4 border-0 pt-4" style="background: rgba(40,167,69, 0.2);">
                <div class="card-body pt-4">
                    <img class="img-fluid position-absolute offset-2" style="top:-40px;" src={{ asset('img/logo.png') }} alt="Responsive image">
                         <h5 class="card-body text-center text-white font-weight-bold my-0">{{ __('Login to Your Account') }}</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <input id="nik" type="text" class="form-control" name="nik" placeholder="NIK" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1 custom-control custom-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                           <label class="form-check-label custom-control-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col offset-md-1">
                                <button type="submit" class="btn btn-light btn-lg text-success">
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
</body>
@endsection
