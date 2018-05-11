<?php
require ('../config/DBConnection.php');
//Se almacena la informacion que se mando por el url de activacion de cuenta
$clienteID= trim($_GET['x']);
$activacion=trim($_GET['y']);
if (!empty($activacion)){
	$con= new DBConnection();
	$db=$con->DBConnect();
	$stmt=$db->prepare("UPDATE cliente SET active='Yes' WHERE idCliente = :clienteID AND active= :active");
	$stmt->execute(array(
        ':clienteID' => $clienteID,
        ':active' => $activacion
    ));
    if($stmt->rowCount()==1){
    	header('Location:../views/index.php');
    	exit;
    }else{
    	echo "Fallo al Activar la Cuenta";
    }
}
?>