<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/register_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:12:49 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Cadena De Favores | Pagina Para El Registro del Usuario</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/validar.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="assets/img/login-bg/bg-8.jpg" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="fa fa-edit text-success"></i> Bienvenido Registrate Para Obtener Mas Informacion</h4>
                    <p>
                        As a Color Admin Apps administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Registrate
                    <small>Es gratis y siempre lo sera.</small>
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <!---->
                <!--<?php echo ("../controller/Controller.php?accion=create");?>-->
                <div class="register-content">
                    <form action="http://localhost/MVCingeAlex/mvc/controller/Controller.php?accion=create" method="POST" class="margin-bottom-0" onsubmit="return validar();">
                        <label class="control-label">Nombre</label>
                        <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" placeholder="Nombre" required="" name="firstName" />
                            </div>
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" placeholder="Apellido" required="" name="lastName" />
                            </div>
                        </div>
                        <label class="control-label">Correo</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Direccion de Correo" required="" name="email" id="email"/>
                            </div>
                        </div>
                        <label class="control-label">Vuelve a Escribir Tu Correo</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Vuelve a Ingresar Tu Correo" required="" name="email2" id="email2" />
                            </div>
                        </div>
                        <label class="control-label">Contraseña</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" placeholder="Password" name="password" />
                            </div>
                        </div>
                        <div class="checkbox m-b-30">
                            <label>
                                 <input type="checkbox" id="condi" value="1" /> Al Dar Click en Registrar, Aceptas Nuestros <a href="page_blank.php">Terminos y Condiciones</a>
                            </label>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Registrar</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                            Tienes Una Cuenta? Click <a href="index.php">aqui</a> para Ingresar.
                        </div>
                        <hr />
                        <p class="text-center text-inverse">
                            &copy; Cadena De Ayudas Todos Los Derechos Reservados 2017
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Barra De Personalizacion</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Estilo De Cabecera</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">Defecto</option>
                            <option value="2">Invertido</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/register_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:12:56 GMT -->
</html>

