<?php
        require_once("../config/DBConnection.php");
        require_once("../model/User.php");
        require_once("../model/UserModel.php");
        session_start();
        $api_key = "ad49c023-d8a6-4d88-971f-f2b0bb3edb5f";
        $xpub = $_SESSION['xpub'];
        echo $_SESSION['xpub'];
        $secret = "";
        $rootURL = "http://www.cadenadefavoresweb.com";
        $orderID = uniqid();
        $gap_limit=500;
        $callback_url = $rootURL."/callback.php?invoice=".$orderID."&secret=".$secret;
        $receive_url = "https://api.blockchain.info/v2/receive?key=".$api_key."&xpub=".$xpub."&callback=".urlencode($callback_url)."&gap_limit=".$gap_limit;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $receive_url);
        $ccc = curl_exec($ch);
        $json = json_decode($ccc, true);
        $payTo = $json['address'];
		echo $payTo;
                echo "<pre>";
		var_dump($json);
                echo "</pre>";
        putDir($payTo);
?>
<!DOCTYPE html>
<html>
<head>
        <title>prueba</title>
</head>
<body>
        <img src="http://chart.googleapis.com/chart?chs=125x125&cht=qr&chl=<?php echo $payTo; ?>" width="50%">
        <?php $_SESSION['pago']=$payTo;?>
        <?php header("Location:../views/paymentView.php")?>
</body>
</html>
<?php
function hasDir(){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
                $sql="SELECT direccion_pago FROM billetera WHERE id_cliente='".$_SESSION['userObj']->getIduser()."'";
                $record=$db->query($sql);
                $data=$record->fetch(PDO::FETCH_ASSOC);
                if ($data!=null){
                        $_SESSION['pago']=$data['direccion_pago'];
                        return false;
                }else{
                        return true;
                }
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return false;

        }
}

function putDir($direccion){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
                 $stmt=$db->prepare("UPDATE billetera SET direccion_pago=:pay WHERE id_cliente=:email");
                 $stmt->execute(array(':pay' => $direccion,
                                        ':email'=>$_SESSION['userObj']->getIduser()));
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return false;
        }
}
 ?>
