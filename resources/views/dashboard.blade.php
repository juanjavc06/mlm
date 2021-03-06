<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title><?php //echo $title; ?></title>
         <!-- Tell the browser to be responsive to screen width -->
         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
         <!-- Bootstrap 3.3.7 -->
         <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
         <!-- Font Awesome -->
         <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
         <!-- Ionicons -->
         <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
         <!-- jvectormap -->
         <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
         <!-- Theme style -->
         <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
         <!-- AdminLTE Skins. Choose a skin from the css/skins
              folder instead of downloading all of them to reduce the load. -->
         <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
         <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
         <link rel="stylesheet" href="{{ asset('plugins/diagram/Treant.css') }}">
         <!-- Google Font -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
         <style>.action{font-size: 25px; padding: 5px 10px 5px 10px; min-height: 37px; min-width: 47px; } </style>
         <!-- jQuery 3 -->
         <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
         <!-- Bootstrap 3.3.7 -->
         <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
         <!-- FastClick -->
         <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>        
         <!-- AdminLTE App -->
         <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
         <!-- Sparkline -->
         <script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
          <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>Trd</b></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Trading</b>Academy</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/dist/img/avatar.png" class="user-image" style="width: 25px;height: 25px; object-fit: cover">
                      <span class="hidden-xs"><?php //echo $user; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="/dist/img/avatar.png" class="img-circle" style="width: 90px;height: 90px; object-fit: cover; margin: 0px auto;display: block;">

                        <p>
                            Paul Castellanos <br> Administrador
                        </p>
                      </li>
                      <li class="user-footer">
                        <div class="pull-left">
                          <a class="btn btn-default btn-flat" id="profile-settings">Modificar Perfil</a>
                        </div>
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">salir</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </nav>
          </header>
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu de Navegacion</li>
                    <li>
                        <a href="dashboard.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview ">
                        <a href="#">
                            <i class="fa fa-dollar"></i> <span>Pagos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" >
                            <li><a href="payments-make.php"><i class="fa fa-dollar"></i>Pagos Realizados</a></li>
                            <li><a href="payments-past.php"><i class="fa fa-list"></i>Pagos Pendientes</a></li>
                            <li><a href="payments-slopes.php"><i class="fa fa-money"></i>Historial de Pagos</a></li>
                            <li><a href="payments.php"><i class="fa fa-cc-paypal"></i>Hacer pagos</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i> <span>Productos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="products-list.php"><i class="fa fa-shopping-bag"></i>Lista de Productos</a></li>
                            <li><a href="products-add.php"><i class="fa fa-plus"></i>Nuevo Producto</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dollar"></i> <span>Usuarios</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=""><i class="fa fa-dollar"></i>Administradores</a></li>
                            <li><a href=""><i class="fa fa-history"></i>Usuarios</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>


            @yield('content')  

          
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
          </footer>

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
              <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
              <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Home tab content -->
              <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                        <p>Will be 23 on April 24th</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-user bg-yellow"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                        <p>New phone +1(800)555-1234</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                        <p>nora@example.com</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-file-code-o bg-green"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                        <p>Execution time 5 seconds</p>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Custom Template Design
                        <span class="label label-danger pull-right">70%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Update Resume
                        <span class="label label-success pull-right">95%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Laravel Integration
                        <span class="label label-warning pull-right">50%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Back End Framework
                        <span class="label label-primary pull-right">68%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- /.control-sidebar-menu -->

              </div>
              <!-- /.tab-pane -->

              <!-- Settings tab content -->
              <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                  <h3 class="control-sidebar-heading">General Settings</h3>

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Report panel usage
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Some information about this general settings option
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Allow mail redirect
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Other sets of options are available
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Expose author name in posts
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Allow the user to show his name in blog posts
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <h3 class="control-sidebar-heading">Chat Settings</h3>

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Show me as online
                      <input type="checkbox" class="pull-right" checked>
                    </label>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Turn off notifications
                      <input type="checkbox" class="pull-right">
                    </label>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Delete chat history
                      <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                  </div>
                  <!-- /.form-group -->
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
          </aside>
          <!-- /.control-sidebar -->
          <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
          <div class="control-sidebar-bg"></div>
        </div>
        <div class="modal-container"></div>
        <script>
         $("#a").DataTable();
        $("button.action.action-see").click(function() {
          $.ajax({
            url: '../sections/modals/modalViewReferal.php',
            success: function(respuesta) {
              $(".modal-container").html("");
              $(".modal-container").html(respuesta);
              $("#modal-ajax").modal();
            },
            error: function() { console.log("No se ha podido obtener la información");}
          });
        });
        $("#profile-settings").click(function() {
          $.ajax({
            url: '../sections/modals/modalEditProfile.php',
            success: function(respuesta) {
              $(".modal-container").html("");
              $(".modal-container").html(respuesta);
              $("#modal-ajax").modal();
            },
            error: function() { console.log("No se ha podido obtener la información");}
          });
        });

        </script>
        <!-- jvectormap  -->
    </body>
</html>
            
            