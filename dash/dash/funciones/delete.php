<?php  
require_once('../config/DBConnection.php');
$idUser = $_POST['id'];
$data=new DBConnection();
$db=$data->DBConnect();
$sql="DELETE FROM cliente WHERE idCliente='".$idUser."'";
$db->query($sql);
?>