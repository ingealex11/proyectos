<?php require_once("../controller/UserController.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Estado De Su Pago</title>
		<link rel="stylesheet" href="../views/assets/plugins/bootstrap/css/bootstrap.min.css">
	</head>
<body>
<?php
//Tomado Del Ejemplo de PayU webCheckout con ciertas modificaciones
$emailFather = filter_input(INPUT_GET, "userName");
$ApiKey = "4Vj8eK4rloUd272L48hsrarnUA";
$merchant_id = $_REQUEST['merchantId'];
$referenceCode = $_REQUEST['referenceCode'];
$TX_VALUE = $_REQUEST['TX_VALUE'];
$New_value = number_format($TX_VALUE, 1, '.', '');
$currency = $_REQUEST['currency'];
$transactionState = $_REQUEST['transactionState'];
$firma_cadena = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
$firmacreada = md5($firma_cadena);
$firma = $_REQUEST['signature'];
$reference_pol = $_REQUEST['reference_pol'];
$cus = $_REQUEST['cus'];
$extra1 = $_REQUEST['description'];
$pseBank = $_REQUEST['pseBank'];
$lapPaymentMethod = $_REQUEST['lapPaymentMethod'];
$transactionId = $_REQUEST['transactionId'];
if ($_REQUEST['transactionState'] == 4 ) {
	$estadoTx = "Transacción aprobada";
	$color="green";
	//Se Llama A Activar Pago
	activarPago();
}

else if ($_REQUEST['transactionState'] == 6 ) {
	$estadoTx = "Transacción rechazada";
	$color="red";
}

else if ($_REQUEST['transactionState'] == 104 ) {
	$estadoTx = "Error";
	$color="orange";
}

else if ($_REQUEST['transactionState'] == 7 ) {
	$estadoTx = "Transacción pendiente";
	$color="yellow";
}

else {
	$estadoTx=$_REQUEST['mensaje'];
}


if (strtoupper($firma) == strtoupper($firmacreada)) {
?>
	<h2>Resumen Transacción</h2>
	<table class="table table-striped">
	<tr>
	<td>Estado de la transaccion</td>
	<td style="background-color:<?php echo $color.";";?> color:white;"><?php echo $estadoTx; ?></td>
	</tr>
	<tr>
	<tr>
	<td>ID de la transaccion</td>
	<td><?php echo $transactionId; ?></td>
	</tr>
	<tr>
	<td>Referencia de la venta</td>
	<td><?php echo $reference_pol; ?></td>
	</tr>
	<tr>
	<td>Referencia de la transaccion &nbsp &nbsp</td>
	<td><?php echo $referenceCode; ?></td>
	</tr>
	<tr>
	<?php
	if($pseBank != null) {
	?>
		<tr>
		<td>cus </td>
		<td><?php echo $cus; ?> </td>
		</tr>
		<tr>
		<td>Banco </td>
		<td><?php echo $pseBank; ?> </td>
		</tr>
	<?php
	}
	?>
	<tr>
	<td>Valor total</td>
	<td>$<?php echo number_format($TX_VALUE); ?></td>
	</tr>
	<tr>
	<td>Moneda</td>
	<td><?php echo $currency; ?></td>
	</tr>
	<tr>
	<td>Descripción</td>
	<td><?php echo ($extra1); ?></td>
	</tr>
	<tr>
	<td>Entidad:</td>
	<td><?php echo ($lapPaymentMethod); ?></td>
	</tr>
	</table>
	<a class="btn btn-primary" href="../views/dashboard.php">Regresar</a>
<?php
}
else
{
?>
	<h1>Error validando firma digital.</h1>
<?php
}
?>
</body>
</html>

<?php
function activarPago(){
	session_start();
	$user= new UserController();
	$data=$user->activarPago($_SESSION["userObj"]->getIduser());
	$_SESSION["userObj"]->setPago($data->getPago());
	$data=null;
	//Si EL USUARIO TIENE PADRE SE EVALUA SI ESTE ES CEDIBLE
	if ($user->tienePadre($_SESSION["userObj"]->getIduser())){
			if ($user->esCedible($_SESSION["userObj"]->getIduser())==true){
					//echo "Entro a el if para ceder los Usuarios";
					$user->cederPersonas($_SESSION["userObj"]->getIduser());
			}else{
				//No Es CEDIBLE
					//header("Location:../views/dashboard.php");
			}
	}else{
			header("Location:../views/dashboard.php");
	}

}

 ?>
