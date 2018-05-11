<?php  
require_once('../config/DBConnection.php');
$idUser = $_POST['id'];
$data=new DBConnection();
$db=$data->DBConnect();
$sql="DELETE FROM personascilente WHERE correoPersona='".$idUser."'";
$db->query($sql);

?>