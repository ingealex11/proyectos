<?php
require_once '../model/UserModel.php';
session_start();
include("header.php");
?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Dashboard</a></li>
				<li><a href="javascript:;">Yo</a></li>
				<li class="active">Editar Perfil</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Editar Perfil <small>Una Cuenta Mas Personal</small></h1>
			<!-- end page-header -->
			<!-- begin profile-container -->
            <div class="profile-container">
                <!-- begin profile-section -->
                <div class="profile-section">
                    <!-- begin profile-left -->
                    <div class="profile-left">
                        <!-- begin profile-image -->
                        <div class="profile-image">
                            <img src="<?php  echo $_SESSION['userObj']->getImagenUsuario();?>"/>
                            <i class="fa fa-user hide"></i>
                        </div>
                       <form action="<?php  echo  "../controller/Controller.php?accion=imag";?>" method="post" enctype="multipart/form-data">
                       		<div class="m-b-10">
                       		<label class="btn btn-primary">
    							Examinar <input type="file" style="display: none;" name="imgUsr" onchange="ValidarImagen(this);">
							</label>
                            <input type="submit" value="Cambiar Imagen De Perfil" class="btn btn-warning btn-block btn-sm">
                        	</div>
                       </form>
											 <!--Script para validar que sea una imagen-->
                       <script type="text/javascript">
                           function ValidarImagen(obj){
                                        var uploadFile = obj.files[0];

                                        if (!window.FileReader) {
                                            alert('El navegador no soporta la lectura de archivos');
                                            return;
                                        }

                                        if (!(/\.(jpg|png|gif)$/i).test(uploadFile.name)) {
                                            alert('El archivo a adjuntar no es una imagen');
                                        }
                                        else {
                                            var img = new Image();
                                            img.onload = function () {
                                                if (this.width.toFixed(0) < 200 && this.height.toFixed(0) < 200) {
                                                    alert('Las medidas deben mayores o iguales a : 200 * 200');
                                                }
                                                else if (uploadFile.size > 1000000)
                                                {
                                                    alert('El peso de la imagen no puede exceder de un 1MB')
                                                }
                                                else {
                                                    alert('Imagen correcta :)')
                                                }
                                            };
                                             img.src = URL.createObjectURL(uploadFile);
                                        }
                                    }
                       </script>
                        <!-- end profile-highlight -->
                    </div>
                    <!-- end profile-left -->
                    <!-- begin profile-right -->
                    <div class="profile-right">
                        <!-- begin profile-info -->
                        <div class="profile-info">
                            <!-- begin table -->
                            <div class="table-responsive">
                                <table class="table table-profile">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <h4><?php  echo $_SESSION["userObj"]->getUser();?> <small><?php echo $_SESSION["userObj"]->getLastName(); ?></small></h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="divider">
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="field">PayU</td>
                                            <td><i class="fa fa-user-secret" aria-hidden="true"></i><a href="formularioAccesoBilletera.php" class="m-l-5">Añadir Mis Datos De Pago</a></td>
                                        </tr>
																				<tr>
																						<td class="field" style="color:red;"><td>
																				</tr>
                                        <tr class="divider">
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr class="divider">
                                            <td colspan="2"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table -->
                        </div>
                        <!-- end profile-info -->
                    </div>
                    <!-- end profile-right -->
                </div>
                <!-- end profile-section -->
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

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
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
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/extra_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:11:22 GMT -->
</html>
