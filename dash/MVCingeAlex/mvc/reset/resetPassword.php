<?php
require ('../config/DBConnection.php');
$con=new DBConnection();
$db=$con->DBConnect();
$stmt=$db->prepare('SELECT resetToken,resetComplete,idCliente FROM cliente WHERE resetToken=:token');
$stmt->execute(array(':token'=>$_GET['key']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
if (empty($row['resetToken'])){
	echo "<h1>Token Invalido</h1>";
	exit;
}else{
	//echo json_encode($row);
}
?>
<script type="text/javascript">
    function verificarPassword(){
        var pas1=document.getElementById('pas1').value;
        var pas2=document.getElementById('pas2').value;
        if (pas1==pas2){
            return true;
        }else{
            alert("Las Claves No Coinciden");
            return false;
        }
        
    }
</script>
<!DOCTYPE html>
<html>
<head>
    <title>Cadena De Favores | Cambiar Contraseña</title>
    <link rel="stylesheet" type="text/css" href="../views/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="body">
    <div class="global">
    <h3 class="centrado">Formulario Para Cambiar Tu Contraseña<small> Llena El Siguiente Formulario</small></h3>
    <div class="formulario contenedor">
        <form class="forma" action="<?php echo "../controller/Controller.php?accion=actualizarClave" ?>" onsubmit="return verificarPassword();" method="post">
            <div class="ubicar">
                <label for="pas1">Nueva Contraseña</label>
                <input class="form-control" type="password" name="password1" id="pas1" placeholder="password">
            </div>
            <div class="ubicar">
                <label for="pas2">Confirmar Contraseña</label>
                <input class="form-control" type="password" name="password2" placeholder="password" id="pas2">
            </div>
            <div class="ubicar">
                <input type="submit" class="send btn btn-success" name="submit" placeholder="enviar">
            </div>
            <input type="hidden" name="email" value="<?php echo $row['idCliente'];?>">
        </form> 
    </div>
    </div>
</body>
</html>