<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:01:51 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Cadena De Favores | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<script src="assets/js/validar.js"></script>
	<script src="assets/js/jquery-3.2.1.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="dashboard.php" class="navbar-brand"><span class="navbar-logo"></span>Barra Principal</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Ingresa Una Palabra Clave" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">4</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Noitificaciones (4)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php  echo $_SESSION["userObj"]->getImagenUsuario();?>" alt="" />
							<span class="hidden-xs"><?php echo $_SESSION["userObj"]->getUser();?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<!--<li><a href="javascript:;">Calendar</a></li>-->
							<li><a href="extra_profile.php">Editar Perfil</a></li>
							<li class="divider"></li>
							<li><a href="<?php
										echo "http://localhost/MVCingeAlex/mvc/controller/Controller.php?accion=exit";?>">Cerrar Sesion</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?php  echo $_SESSION["userObj"]->getImagenUsuario();?>" alt="" /></a>
						</div>
						<div class="info">
							<?php  echo $_SESSION["userObj"]->getUser();?>
							<small><?php echo $_SESSION["userObj"]->getIduser(); ?></small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navegacion</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>
						<ul class="sub-menu">
						    <li class="active"><a href="dashboard.php">Dashboard</a></li>
						    <!--<li><a href="index_v2.php">Dashboard v2</a></li>-->
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="badge pull-right">10</span>
							<i class="fa fa-inbox"></i>
							<span>Email</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="email_inbox.php">Inbox v1</a></li>
						    <li><a href="email_inbox_v2.php">Inbox v2</a></li>
						    <li><a href="email_compose.php">Compose</a></li>
						    <li><a href="email_detail.php">Detail</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-th"></i>
						    <span>Tablas  <span class="label label-theme m-l-5"></span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="<?php  echo "../controller/Controller.php?accion=registrosDelUsuario"?>">Mis Usuarios</a></li>
							<li><a href="<?php echo "../controller/Controller.php?accion=heredados" ?>">Usuarios Heredados</a></li>
						</ul>
					</li>
					<li><a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendario</span></a></li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-child"></i>
						    <span>Yo</span>
						</a>
						<ul class="sub-menu">
							<li><a href="extra_profile.php">Editar Perfil</a></li>
						</ul>
					</li>
					<?php if ($_SESSION['userObj']->getPago()=='YES'){ ?>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-key"></i>
					        <span>Registrar Un Usuario</span>
					    </a>
					    <ul class="sub-menu">
					        <li><a href="<?php
					        if ($_SESSION["userObj"]->getUsuariosRegistrados()<$_SESSION["cantRegist"]){
					        	echo "register_user.php";
					        	}?>">Formulario</a></li>
					    </ul>
					</li>
					<?php } ?>
					<!--Si No Es Cabeza-->
					<?php if(esCabeza()){ ?>
					<li><a href="<?php echo "../controller/Controller.php?accion=payView" ?>"><i class="fa fa-money"></i> <span>Pagar (Sin Bitcoins)</span></a></li>
					<li><a href="<?php echo "../controller/Controller.php?accion=payView2" ?>"><i class="fa fa-btc" aria-hidden="true"></i> <span>Pagar Bitcoins</span></a></li>
					<?php } ?>

					<?php if(($_SESSION['userObj']->getPago()=='YES')){ ?>
					<li><a href="<?php echo "../controller/Controller.php?accion=usuariosEliminar" ?>"><i class="fa fa-minus"></i> <span>Eliminar Usuario</span></a></li>
					<?php } ?>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<?php function esCabeza(){
			require_once("../controller/UserController.php");
			$usuario=new UserController();
			if (!$usuario->esCabeza($_SESSION['userObj']->getIduser())){
				return false;
			}else{
				return true;
			}
		}  ?>
