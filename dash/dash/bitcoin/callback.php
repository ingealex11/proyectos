<?php  
//Secreto Para Mayor Seguridad En El Pago
$secret="";
if ($_GET['secret']!=$secret){
	die('You Cant Hack Our Service');
}else{
	//Actualizar Pago
	$fff=fopen("test.txt", "w");
	$value=$_GET['value']." - ";
	$fw=fwrite($fff, $value);
	$invoice=$_GET['invoice'];
	$fw=fwrite($fff, $invoice);
	fclose($fff);
	echo "*ok*";
}
?>