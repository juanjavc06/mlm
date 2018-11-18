@extends('public_form')

@section('content')
   <div class="login-box">
            <div class="login-logo">
                <b>{{ __('Login') }}</b>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                @if ($errors->has('email'))
                    <div class="col-12" style="text-align: center;font-size: 20px; color: white;background: red;">
                        <p>{{ $errors->first('email') }}</p>
                    </div>
                @endif
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <p class="login-box-msg">Inicio de Sesión</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                      <div class="form-group has-feedback">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                          <div class="col-xs-8">
                              <div class="checkbox icheck">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                  </label>
                              </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-4">
                              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In">
                          </div>
                          <!-- /.col -->
                      </div>
                  </form>
              <!-- /.social-auth-links -->
              <a href="{{ route('forget-password') }}">{{ __('Forgot Your Password?') }}</a><br>
              <a href="{{ route('registro') }}" class="text-center">Registrar un miembro</a>
            </div>
            <!-- /.login-box-body -->
        </div>
@stop