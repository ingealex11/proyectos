<?php
require_once '../model/UserModel.php';
session_start();
function cerrarSession(){
	session_unset();
	session_destroy();
}
include('header.php')
?>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Dashboard</a></li>
				<li><a href="javascript:;">Editar Perfil</a></li>
				<li class="active">Formulario XPub</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Formulario Para Ingresar Tus Datos<small> Asi Podras Obtener Tus Ingresos</small></h1>
			<!-- end page-header -->

			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Formulario Para Tus Datos PayU</h4>
			    </div>
			    <div class="panel-body">
			        <div class="table-responsive">
                        <table id="user" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre Del Campo</th>
                                    <th>Valor</th>
                                    <th>Descripcion</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<form action="<?php echo "../controller/Controller.php?accion=storeInfo"?>" method="post">
	                                <tr>
	                                    <td>id Comercio</td>
	                                    <td>
	                                    	<input type="password" name="comercio" required="" class="form-control" style="margin-bottom: 10px;">
	                                	</td>
	                                    <td><span class="text-muted" style="display: inline-block;">Por medio de este codigo sabremos que el pago es para ti</span></td>
	                                </tr>
	                                <tr>
	                                	<td>id Cuenta</td>
	                                	<td>
	                                		<input type="password" name="cuenta" required="" class="form-control" style="margin-bottom: 10px;">
	                                	</td>
	                                	 <td><span class="text-muted" style="display: inline-block;">Por medio de este codigo sabremos que el pago es para ti</span></td>
	                                </tr>
	                                <tr>
	                                	<td>Api Key</td>
	                                	<td>
	                                		<input type="password" name="api_key" required="" class="form-control" style="margin-bottom: 10px;">
	                                	</td>
	                                	 <td><span class="text-muted" style="display: inline-block;">Por medio de este codigo se conectara con PayU</span></td>
	                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" name="enviar" class="btn btn-sm btn-success">
                        </form>
                    </div>
			    </div>
				 <!--Datos Bitcoin-->
					<div class="panel-body">
							<div class="table-responsive">
												<table id="user" class="table table-bordered table-striped">
														<thead>
																<tr>
																		<th>Nombre Del Campo</th>
																		<th>Valor</th>
																		<th>Descripcion</th>
																</tr>
														</thead>
														<tbody>
															<form action="<?php echo "../controller/Controller.php?accion=xpub"?>" method="post">
																	<tr>
																			<td>XPUB</td>
																			<td>
																				<input type="password" name="xpubUser" required="" class="form-control" style="margin-bottom: 10px;">
																		  </td>
																			<td><span class="text-muted" style="display: inline-block;">Por medio de este codigo sabremos a donde te llegara el pago (No compartas este codigo a nadie mas)</span></td>
																	</tr>
														</tbody>
												</table>
												<input type="submit" name="enviar" class="btn btn-sm btn-success">
												</form>
										</div>
					</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->

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
	<script src="assets/plugins/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	<script src="assets/plugins/bootstrap3-editable/inputs-ext/address/address.js"></script>
	<script src="assets/plugins/bootstrap3-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
	<script src="assets/plugins/bootstrap3-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
	<script src="assets/plugins/bootstrap3-editable/inputs-ext/wysihtml5/wysihtml5.js"></script>
	<script src="assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
	<script src="assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/plugins/select2/select2.min.html"></script>
	<script src="assets/plugins/mockjax/jquery.mockjax.js"></script>
	<script src="assets/plugins/moment/moment.min.js"></script>
	<script src="assets/js/form-editable.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			FormEditable.init();
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

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/form_editable.html?c=inline by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 07:41:51 GMT -->
</html>
