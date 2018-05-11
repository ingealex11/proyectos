<?php
require_once '../model/UserModel.php';
session_start();
function cerrarSession(){
	session_unset();
	session_destroy();
}
include('header.php');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.delete').click(function(){
			var correo='id='+$(this).attr('id');
			var correo2=$(this).attr('id');
			var opcion=confirm("Estas Seguro De Eliminar Este Registro?");
			var usuariosRegistrados='<?php echo $_SESSION['userObj']->getIduser();?>';
			usuariosRegistrados="users="+usuariosRegistrados;
			console.log(usuariosRegistrados);
			if (opcion==true){
				$.ajax({
            		type: "POST",
            		url: "../funciones/delete.php",
            		data: correo,
            		success: function() {
                		var dato=document.getElementById(correo2).remove();
            		}
        		});
        		$.ajax({
        			type:"POST",
        			url:"../funciones/deleteTable2.php",
        			data:correo,
        			success: function(){
        			}
        		});

        		$.ajax({
        			type:"POST",
        			url:"../funciones/actualizarUsuarios.php",
        			data:usuariosRegistrados,
        			success:function(){
        				alert("Actualizar Datos Correcto");
        			}
        		}).done(function(respuesta){
							console.log(JSON.stringify(respuesta));
						});
			}
		});

	});
</script>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Dashboard</a></li>
				<li class="active">Eliminar Usuario</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Tabla Para La Administracion De Los Usuarios <small>En esta Vista Puedes Eliminar Un Usuario</small></h1>
			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    <div class="col-md-2">
			        <h5>
			            Esta Tabla Te Permite Realizar:
			        </h5>
                    <ul class="p-l-25 m-b-15">
                        <li>Eliminar El Usuario Siempre y Cuando Aun No Haya Realizado Ningun Pago</li>
                        <li>Ordenar La Tabla De Acuerdo El Criterio Deseado</li>
                        <li>Mover La Tabla Segun Desee</li>
                    </ul>
			    </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-10">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">DataTable - RowReorder</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo Electronico</th>
                                        <th>Estado Pago</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php if(isset($_SESSION['usuariosDelete'])): ?>
                                		<?php for ($i=0; $i< sizeof($_SESSION['usuariosDelete']); $i++){?>
                                		<tr class="odd gradeX" id="<?php echo $_SESSION['usuariosDelete'][$i]['correoPersona'];?>">
                                        	<td><?php echo $_SESSION['usuariosDelete'][$i]['nombreCliente']; ?></td>
                                        	<td><?php echo $_SESSION['usuariosDelete'][$i]['apellidoCliente']; ?></td>
                                        	<td><?php echo $_SESSION['usuariosDelete'][$i]['correoPersona']; ?></td>
                                        	<td><?php echo $_SESSION['usuariosDelete'][$i]['pago']; ?></td>
                                        	<td><button class="delete" id="<?php echo $_SESSION['usuariosDelete'][$i]['correoPersona'];?>"><i class="fa fa-trash" aria-hidden="true" style="color: black;"></i></button></td>
                                    	</tr>
                                		<?php } ?>
                                	<?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
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
	<script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
	<script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/js/table-manage-rowreorder.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			TableManageRowReorder.init();
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

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/table_manage_rowreorder.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:08:03 GMT -->
</html>
