@extends('layouts.public_form')

@section('content')
   <div class="login-box">
            <div class="login-logo">
                <b>Administrador</b><br>Academia
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <?php if ($msg == "error") { ?>
                    <div class="col-12" style="text-align: center;font-size: 20px; color: white;background: red;">
                        <p>Usuario o Contrasena Incorrectos</p>
                    </div>
                <?php } ?>
                <p class="login-box-msg">Inice Sesion</p>
                <form action="start.php" method="post">
                      <div class="form-group has-feedback">
                          <input type="text" name="correo_electronico" class="form-control" placeholder="Email">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                          <input type="password" name="contrasena" class="form-control" placeholder="Password">
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                          <div class="col-xs-8">
                              <div class="checkbox icheck">
                                  <label>
                                      <input type="checkbox"> Recuerdame
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

              <a href="#">Olvide mi contrasena</a><br>
              <a href="register.html" class="text-center">Registrar un miembro</a>
            </div>
            <!-- /.login-box-body -->
        </div>
@stop