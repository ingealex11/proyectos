<?php  
require_once '../model/UserModel.php';
session_start();
function cerrarSession(){
	session_unset();
	session_destroy();
}
include('header.php');
?>			
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Dashboard</a></li>
				<li><a href="javascript:;">Pago</a></li>
				<li class="active">Pagina En Donde Se Procesara El Pago</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Pagina Para Realizar Tu Pago<small></small></h1>
			<!-- end page-header -->
			
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Pago A Travez De Bitcoin</h4>
			    </div>
			    <div class="panel-body">
			        A Continuacion Se Le Va Presentar el Codigo QR de Pago Para el Usuario Segun Corresponda:
                    <br>
                    <img src="http://chart.googleapis.com/chart?chs=125x125&cht=qr&chl=<?php echo $_SESSION['pago']; ?>" width="200px"> 
                    <p id="websocket">Esperando Respuesta Del Pago (Recuerda que este procedimiento se realiza con la billetera de pago Blockchain.info)</p>
                    <br>
                    <a href="<?php echo "../controller/Controller.php?accion=pagar" ?>" class="btn">SIMULACION DEL PAGO</a>
			    </div>
			</div>
           <p>    <?php echo $_SESSION['pago']; ?>   </p>
		</div>
		<!-- end #content -->
		
		<!-- begin #footer -->
		<div id="footer" class="footer">
		    &copy; 2017 Cadena De Favores Web Todos Los Derechos Reservados
		</div>
		<!-- end #footer -->
		
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
    <script type="text/javascript">
    //Codigo Para Verificar Cuando Una Transaccion LLega Y Por lo Tanto Se Actualiza EL ESTADO DE PAGO DEL USUARIO CON AJAX
    var bitcoins=new WebSocket("wss://ws.blockchain.info/inv");
    bitcoins.onopen= function(){
        bitcoins.send(JSON.stringify({"op":"addr_sub", "addr":"<?php echo $_SESSION["pago"]?>"}));
    };
    bitcoins.onmessage= function(onmsg){
        var respuesta=JSON.parse(onmsg.data);
        var getOuts=respuesta.x.out;
        var countOuts=getOuts.length;
        console.log(respuesta);
        for (var i = 0; i< countOuts; i++) {
            var direccionSalida=respuesta.x.out[i].addr;
            var direccion="<?php echo $_SESSION["pago"]?>";
            if (direccionSalida==direccion){
                var cantidad=respuesta.x.out[i].value;
                var valorenBitcoin=cantidad/100000000;
                document.getElementById("websocket").innerHTML="Pago Recibido="+valorenBitcoin+"BTC";
            }
        }
    };
    
</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/page_with_footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:11:15 GMT -->
</html>

