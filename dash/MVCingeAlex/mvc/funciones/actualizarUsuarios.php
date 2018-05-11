<?php
require_once('../config/DBConnection.php');
require_once '../model/User.php';
session_start();
//include('../model/User.php');
$users=$_POST['users'];
$pdo=new DBConnection();
$db=$pdo->DBConnect();
$sql="SELECT usuariosRegistrados FROM cliente WHERE idCliente='".$users."'";
$result=$db->query($sql);
$result=$result->fetch(PDO::FETCH_ASSOC);
$num=$result['usuariosRegistrados'];
$num--;
$sql="UPDATE cliente SET usuariosRegistrados='".$num."' WHERE idCliente='".$users."'";
$db=$pdo->DBConnect();
$db->query($sql);
$ayu=new User();
$ayu=$_SESSION['userObj'];
$usrValue=$ayu->getUsuariosRegistrados()-1;
$ayu->setUsuariosRegistrados($usrValue);
echo json_encode($ayu->getUsuariosRegistrados());
?>
