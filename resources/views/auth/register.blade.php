@extends('public_form')

@section('content')
   <div class="login-box">
            <div class="login-logo">
                <b>{{ __('Login') }}</b>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Registro</p>
                <form action="{{ route('registrar') }}" method="post"> 
                    @csrf
                    <input type="hidden" name="padre" value="<?= (isset($id))?$id:"" ?>">
                    <div class="form-group has-feedback">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <input id="name" type="text" placeholder="Nombre" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('Nombre') }}" required autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <input placeholder="Correo Electronico" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required data-toggle="tooltip" data-placement="top" title="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <input placeholder="Contraseña" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        @if ($errors->has('confirm-password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('confirm-password') }}</strong>
                            </span>
                        @endif
                        <input placeholder="Vuelva a ingresa su contraseña." id="confirm-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="confirm-password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                        <input placeholder="Telefono" id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        @if ($errors->has('country'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                        @endif
                        <select id="country" name="country"  class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}">
                        <option value="">-- Indique su Pais. --</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                        </select>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        @if ($errors->has('state'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                        @endif
                        <select id="state" name="state" disabled class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}">
                        <option value="">-- Indique su Estado --</option>
                        </select>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        @if ($errors->has('package'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('package') }}</strong>
                            </span>
                        @endif
                        <select id="package" name="package"  class="form-control{{ $errors->has('productos') ? ' is-invalid' : '' }}">
                        <option value="" data-pr-description="">-- Paquete --</option>
                        @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}" data-pr-description="{{ $producto->descripcion }}"  >{{ $producto->nombre }}</option>
                        @endforeach
                        </select>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <p id="description">
                            
                        </p>
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
              <a href="{{ route('index') }}">{{ __('Iniciar sesion') }}</a><br>
            </div>
            <!-- /.login-box-body -->
        </div>
@stop

@section('javascript')
<script>
    $("#country").change(function() {
        $("#state").html('<option value="" selected>-- Indique su Estado. --</option>');
        $("#state").attr('disabled',false);
        $.ajax({
            url: "{{ route('states') }}",
            type: "GET",
            data:{id:$("#country").val()},
            beforeSend: function () {
                //$("#resultado").addClass("fa-spin fa-spinner");
            },
            success: function(resp) {
                console.log(resp);
                var states = JSON.parse(resp);
                for (var i = 0; i < states.length; i++) {
                    $("#state").append('<option value="' + states[i].id + '" >' + states[i].name + '</option>');
                }
            }
        });
    });
    $("#email").change(function() {
        $.ajax({
            url: "{{ route('email-exist') }}",
            type: "GET",
            data:{email:$("#email").val()},
            success: function(resp) {
                if (!resp) {
                    $("#email").attr("title","EL usuario existe");
                    $("[data-toggle=tooltip]").tooltip("open");
                    
                }
            }
        });
    });
    $("#package").change(function() {
        $("#description").html($(this).children("option:selected").attr("data-pr-description"));
    });
</script>
@stop