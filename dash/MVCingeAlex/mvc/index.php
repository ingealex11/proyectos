
<!DOCTYPE html>
<!--
Inicio Del Programa
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <!-- Se Evalua SI Existe Alguien EN LA BD si existe se cargar la pagina de login en caso contrarion se carga la pagina de registro-->
    <?php
    	require_once 'config/DBConnection.php';
    	function isempy(){
    		$table="cliente";
	        $pdo= new DBConnection();
	        $db=$pdo->DBConnect();
	        $sql="SELECT *FROM ".$table;
	        $record=$db->query($sql);
	        $record=$record->fetchAll();
	        return $record;
    	}
    	if(isempy()!=null){
    		header("Location:views/index.php");
    	}else{
    		header("Location:views/register_v3.php");
    	}
        ?>
    </body>
</html>
