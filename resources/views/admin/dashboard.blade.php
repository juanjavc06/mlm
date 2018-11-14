@extends('dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?php //echo $pagename; ?></h1><small>Bienvenido <?php //echo $user; ?></small>
    </section>
    <!-- Main content -->
    <section class="content ">
        <!-- Info boxes -->
        <div class="row ">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Afiliados</span>
                    <span class="info-box-number">5</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-dollar"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Por Pagar</span>
                        <span class="info-box-number">-$15,250.00</span>
                    </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>  
            <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">$32,250.00</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Mayores Afiliados</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive " style="padding: 10px">
                <table class="table table-hover">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col style="width:130px ">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Telefono</th>
                            <th>Referido por:</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Alberto Rodriguez</th>
                            <th>alv@kk.com</th>
                            <th>(662)4128741</th>
                            <th>Rama Principal</th>
                            <th>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default fa fa-eye action action-see"></button>
                                    <button type="button" class="btn btn-default fa fa-dollar action action-payment"></button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Jose Rodriguez</th>
                            <th>jose-rodriguez@damnit.com</th>
                            <th>(512)2541385</th>
                            <th>1</th>
                            <th>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default fa fa-eye action action-see"></button>
                                    <button type="button" class="btn btn-default fa fa-dollar action action-payment"></button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>415</th>
                            <th>Alberto Rodriguez</th>
                            <th>alv@kk.com</th>
                            <th>(662)4128741</th>
                            <th>316</th>
                            <th>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default fa fa-eye action action-see"></button>
                                    <button type="button" class="btn btn-default fa fa-dollar action action-payment"></button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>415</th>
                            <th>Alberto Rodriguez</th>
                            <th>alv@kk.com</th>
                            <th>(662)4128741</th>
                            <th>316</th>
                            <th>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default fa fa-eye action action-see"></button>
                                    <button type="button" class="btn btn-default fa fa-dollar action action-payment"></button>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>415</th>
                            <th>Alberto Rodriguez</th>
                            <th>alv@kk.com</th>
                            <th>(662)4128741</th>
                            <th>316</th>
                            <th>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default fa fa-eye action action-see"></button>
                                    <button type="button" class="btn btn-default fa fa-dollar action action-payment"></button>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
