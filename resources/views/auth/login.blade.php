@extends('layouts.app')

@section('content')
<body class="bg-dark">
        <div class="container pt-4 mr-5">
            <div class="row">
                <div class="col">
                    <img class="card-img-top" src={{ asset('img/dashboard/owner/melihatdataobat.png') }} alt="Card image cap">
                </div>
                <div class="col-5 bg-success">
                    <div class="card bg-transparent border-0 pt-5">
                    </div>
                    <div class="card bg-transparent border-0 pt-4">
                    </div>
                    <div class="card-body pt-5">
                        <h2 class="card-title text-center text-uppercase font-weight-bold py-4 text-white">{{ __('Login') }}</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <input id="nik" type="text" class="form-control" name="nik" placeholder="NIK" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Kata Sandi" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                               <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-light text-success font-weight-bold">
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
