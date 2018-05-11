<?php

require_once '../config/DBConnection.php';
require_once 'deleteModel.php';
require_once 'User.php';
require_once '../controller/UserController.php';

class UserModel extends User {

    private $table;
    //Constructor
    public function __construct() {
        $this->table = "cliente";
        parent::__construct($this->table);
    }
    //Funcion Para El Logeo del Usuario
    public function login(){
        $pdo = new DBConnection();
        $db = $pdo->DBConnect();
        try{
            $db->beginTransaction();
            $sql = "SELECT * FROM  " . $this->table . " WHERE idCliente =  ?";
            $record = $db->prepare($sql);
            $record->execute(array($this->getIduser()));
            $userExist = $record->rowCount();
            if ($userExist) {
                $dataList = $record->fetchAll(PDO::FETCH_ASSOC);
                $db->commit();
                $db = null;
                if (password_verify($this->getPassword(),$dataList[0]['password'])){
                    $db=null;
                    $pdo=null;
                    return $dataList[0];
                }else{
                    $dataList=null;
                    $db=null;
                    $pdo=null;
                    return null;
                }
            } else {
                $db->commit();
                $db = null;
                return $userExist;
            }
        }catch (PDOException $exc){
            $db->rollback();
            $db = null;
            echo $exc->getMessage();
            return null;
        }
    }
    //Funcion Para Crear Un Usuario Segun Condiciones
    public function create(){
        $pdo= new DBConnection();
        $db= $pdo->DBConnect();
        $sql="SELECT *FROM ".$this->table;
        $res=$db->query($sql);
        $isFirst=$res->rowCount();
        $fecha= date('Y-m-d');
        $estado=true;
        try{
          //Si El Usuario Es Una Cabeza se le pone la condicion de que el no debe pagar Bajo ninguna Circustancia
            if (!isset($_SESSION["userObj"])){
                $pago=0;
              }else{
                $pago=1;
              }
            //SI NO HAY USUARIOS ENTONCES SE ESTABLECE COMO LA CABEZA O SI ES EL PRIMER HIJO DE LA CABEZA SE LE PERMITE REALIZAR 10 REGISTROS
            if (!isset($_SESSION["userObj"]) || ($this->esPrimero($_SESSION["userObj"]->getIduser()))) {
                    $sql="INSERT INTO cliente (idCliente,nombreCliente,apellidoCliente,password,active,resetToken,resetComplete,primerUsuario,imagenPerfil,pago,debeCeder,fechaRegistro,debePagar,estado)
                    VALUES('".$this->getIduser()."',
                           '".$this->getUser()."',
                           '".$this->getLastName()."',
                           '".$this->getPassword()."',
                           '".$this->getActive()."',
                           '".null."',
                           '".null."',
                           '".true."',
                            '"."assets/img/user-13.jpg"."',
                            '"."NO"."',
                            '".false."',
                            '".$fecha."',
                            '".$pago."',
                            '".$estado."');";
                    $record=$db->query($sql);
                    //$record->execute();
                    $db=null;
                    $pdo=null;
                    if (isset($_SESSION["userObj"])){
                        $pdo= new DBConnection();
                        $usuarioActual=$_SESSION["userObj"];
                        $numRegis=$_SESSION["userObj"]->getUsuariosRegistrados();
                        $sql="INSERT INTO personascilente (idRegistros,correoPersona,numeroRegistro,heredado)
                        VALUES('".$usuarioActual->getIduser()."',
                               '".$this->getIduser()."',
                               '".$numRegis."',
                                    'No');";
                            $db=null;
                            $db=$pdo->dbConnect();
                            $record=$db->query($sql);
                            $db=$pdo->dbConnect();
                            $sql="UPDATE cliente SET debeCeder='".true."' WHERE idCliente='".$this->getIduser()."'";
                            $record=$db->query($sql);
                            $db=null;
                            $pdo=null;
                    }else {
                        $db=null;
                        $pdo=null;
                        header("Location:../views/index.php");
                    }
                }
            //SI ES UN HIJO NO SE ESTABLECE COMO CABBEZA
            else{
                    $sql="INSERT INTO cliente (idCliente,nombreCliente,apellidoCliente,password,active,resetToken,resetComplete,primerUsuario,imagenPerfil,pago,debeCeder,fechaRegistro,debePagar,estado)
                    VALUES('".$this->getIduser()."',
                           '".$this->getUser()."',
                           '".$this->getLastName()."',
                           '".$this->getPassword()."',
                           '".$this->getActive()."',
                           '".null."',
                           '".null."',
                           '".false."',
                            '"."assets/img/user-13.jpg"."',
                            '"."NO"."',
                            '".true."',
                            '".$fecha."',
                            '".$pago."',
                            '".$estado."');";
                    $db=null;
                    $db=$pdo->dbConnect();
                    $record=$db->query($sql);
                    //$record->execute();
                    $usuarioActual=$_SESSION["userObj"];
                    $numRegis=$_SESSION["userObj"]->getUsuariosRegistrados();
                    $sql="INSERT INTO personascilente (idRegistros,correoPersona,numeroRegistro,heredado)
                    VALUES('".$usuarioActual->getIduser()."',
                           '".$this->getIduser()."',
                            '".$numRegis."',
                                'No');";
                        $db=null;
                        $db=$pdo->dbConnect();
                        $record=$db->query($sql);
            }
        }catch (PDOException $exc){
                echo "Fracaso";
                $db->rollback();
                $db = null;
                echo $exc->getMessage();
                return null;
        }

    }
    //FUNCION PARA ACTUALIZAR LA CANTIDAD DE USUARIOS QUE REGISTRO UN CLIENTE
    public function actualizarUsuariosRegistrados($numeroReg,$idCliente){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $stmt=$db->prepare("UPDATE cliente SET usuariosRegistrados=:register WHERE idCliente = :email");
            $stmt->execute(array(':email'=>$idCliente,
                                 ':register'=>$numeroReg));
        }catch(Exception $e){
            $db->rollback();
            $db = null;
            echo $exc->getMessage();
            return null;
        }
    }
    //FUNCION PARA OBTENER LOS REGISTROS DE UN CLIENTE
    public function obtenerRegistrados($identificacion){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $db->beginTransaction();
            $sql = "SELECT correoPersona,pago FROM personascilente,cliente WHERE '".$identificacion."'=idRegistros GROUP BY correoPersona ORDER BY correoPersona";
            echo $sql;
            $record = $db->query($sql);
            $dataList=$record->fetchAll();
            print_r($dataList);
            $_SESSION["registroUser"]=$dataList;
            $db=$pdo->DBConnect();
            $db->beginTransaction();
            $sql = "SELECT nombreCliente FROM cliente,personascilente WHERE '".$identificacion."'=idRegistros AND correoPersona=idCliente GROUP BY idCliente ORDER BY idCliente";
            echo $sql;
            $record = $db->query($sql);
            $dataList=$record->fetchAll(PDO::FETCH_ASSOC);
            print_r($dataList);
            $_SESSION["registroNombre"]=$dataList;
            $db=$pdo->DBConnect();
            $db->beginTransaction();
            $sql = "SELECT pago FROM cliente,personascilente WHERE '".$identificacion."'=idRegistros AND correoPersona=idCliente GROUP BY idCliente ORDER BY idCliente";
            echo $sql;
            $record = $db->query($sql);
            $dataList=$record->fetchAll(PDO::FETCH_ASSOC);
            print_r($dataList);
            $_SESSION["registroPago"]=$dataList;
            $db=$pdo->DBConnect();
            $db->beginTransaction();
            $sql = "SELECT numeroRegistro FROM personascilente WHERE '".$identificacion."'=idRegistros ORDER BY correoPersona";
            echo $sql;
            $record = $db->query($sql);
            $dataList=$record->fetchAll(PDO::FETCH_ASSOC);
            print_r($dataList);
            $_SESSION["numeroRegistro"]=$dataList;


        }catch(Exception $e){
            $db->rollback();
            echo $e->getMessage();
            return null;
        }
    }
    //FUNCION PARA LA IMAGEN DE PERFIL DEL USUARIO
    public function actualizarImagen($img_nom,$idCliente){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $stmt=$db->prepare("UPDATE cliente SET imagenPerfil=:register WHERE idCliente = :email");
            $stmt->execute(array(':email'=>$idCliente,
                                 ':register'=>$img_nom));
        }catch(Exception $e){
            $db->rollback();
            $db = null;
            echo $exc->getMessage();
            return null;
        }
    }
    //FUNCION PARA SABER SI EL CLIENTE ES CABEZA O EN SU DEFECTO UN HIJO
    public function hasFather($identificacion){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        $db->beginTransaction();
        try{
            $sql = "SELECT correoPersona FROM personascilente WHERE '".$identificacion."'=correoPersona ORDER BY correoPersona";
            $record = $db->query($sql);
            $dataList=$record->fetchAll();
            if ($dataList==null){
            return false;
            }else {
                return true;
            }
        }catch(Exception $e){
            $db->rollback();
            $db = null;
            echo $exc->getMessage();
            return null;
        }
    }
    //FUNCION QUE LLAMA A LA DE HASFATHER PARA RETORNAR UN TRUE EN CASO DE NO SER HIJO UN FALSE EN CASO CONTRARIO
    public function esPrimero($identificacion){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $db->beginTransaction();
            $sql = "SELECT correoPersona FROM personascilente WHERE '".$identificacion."'=idRegistros GROUP BY correoPersona ORDER BY correoPersona";
            $record = $db->query($sql);
            $dataList=$record->fetchAll();
            if ($dataList==null){
                if ($this->hasFather($identificacion)==false){
                    return true;
                }else return false;
            }else return false;

        }catch(Exception $e){
            $db->rollback();
            echo $e->getMessage();
            return null;
        }
    }
    //FUNCION TEMPORAL QUE ME ACTIVA EL PAGO DEL CLIENTE
     public function activatePay($identificacion){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $stmt=$db->prepare("UPDATE cliente SET pago = :pay WHERE idCliente = :email");
            $stmt->execute(array(':email'=>$identificacion,
                                 ':pay'=>"YES"));
            $this->setPago("YES");
            $db=null;
            $stmt=null;
            $pdo=null;
        }catch(Exception $e){
            $db->rollback();
            $db = null;
            echo $exc->getMessage();
            return null;
        }
    }
    //FUNCION QUE VERIFICA SI EL USUARIO ESTA REGISTRADO EN EL SISTEMA
    public function existeUsuario($idEnviada){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        $db->beginTransaction();
        try{
            $sql="SELECT nombreCliente FROM cliente WHERE idCliente='".$idEnviada."'";
            $record=$db->query($sql);
            $dataList=$record->fetchAll();
            if ($dataList!=null){
                $db=null;
                $pdo=null;
                return false;
            }else{
                $db=null;
                $pdo=null;
                return true;
            }

        }catch(Exception $e){
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }

    //FUNCION QUE CEDE LOS USUARIOS
    public function cederCliente($id){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        $db->beginTransaction();
        try{
            //Se Busca A El Padre del Usuario Que pago Segun Condiciones
            $sql="SELECT idRegistros FROM personascilente WHERE correoPersona='".$id."'";
            $record=$db->query($sql);
            $dataList=$record->fetch();
            $padre=$dataList;

            //Se Busca a el padre del padre del usuario al cual se va a ceder Sin embargo en caso de que sea un hijo de la cabeza no se hereda de momento mientras se realiza esta pregunta el dueño del sitio
            $db=$pdo->DBConnect();
            $db->beginTransaction();
            $sql="SELECT idRegistros FROM personascilente WHERE correoPersona='".$padre['idRegistros']."'";
            $record=$db->query($sql);
            $dataList=$record->fetch();
            //Si Se Cumple el if significa que es el hijo de una cabeza
            if ($dataList==null){
                //Se Retorna a la vista del dashboard
                $db=null;
                $pdo=null;
                header("Location:../views/dashboard.php");
            }else{
                //Si no es hijo de una cabeza entoces se cede
                $pdo= new DBConnection();
                $db=$pdo->DBConnect();
                $correo=$dataList;
                $correo=$correo['idRegistros'];
                echo $correo;
                echo $id;
                //Se le va a poner como numero de registro el 11 para indicar los herdados
                $stmt=$db->prepare("UPDATE personascilente SET idRegistros='".$correo."', heredado='Yes' WHERE correoPersona='".$id."';");
                $stmt->execute();
                $stmt=null;
                $db=null;
                $pdo=null;
                header("Location:../views/dashboard.php");
            }

        }catch(Exception $e){
            echo "error";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }

    }

    //FUNCION PARA AVERIGUAR EL NUMERO DEL REGISTRO
    public function getNumReg($id){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $sql="SELECT numeroRegistro FROM personascilente WHERE correoPersona='".$id."'";
            $record=$db->query($sql);
            $dataList=$record->fetchAll();
            echo print_r($dataList);
            $dato=$dataList[0];
            $db=null;
            $pdo=null;
            return $dato['numeroRegistro'];
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }

    //FUNCION PARA CREAR Y SETEAR EL VALOR DE LA BILLETERA DEL CLIENTE
    public function crearBilletera($merchan,$id,$account,$api){
        $pdo= new DBConnection();
        $db=$pdo->DBConnect();
        try{
          if ($this->existeBilletera($id)){
            echo " TIENE BILLETERA";
            $stmt=$db->prepare("UPDATE billetera SET merchantId = :merchant, accountId = :cuenta, api_key = :apikey WHERE id_cliente = :idCliente");
            $stmt->execute(array(':merchant' => $merchan,
                                ':cuenta'=>$account,
                                ':apikey'=>$api,
                                ':idCliente'=>$id));
            $stmt=null;
            $db=null;
            $pdo=null;
          }else{
            echo " NO Tiene BILLETERA";
            $sql="INSERT INTO billetera (merchantId,id_cliente,accountId,api_key) VALUES ('".$merchan."',
                                                                                          '".$id."',
                                                                                          '".$account."',
                                                                                          '".$api."');";
            $record=$db->query($sql);
            $db=null;
            $pdo=null;
            $record=null;

          }
            //header("Location:../views/dashboard.php");
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }

    }
    //FUNCION PARA OBTENER EL XPUB ENCRIPTADO
    public function getXPub($id){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $sql="SELECT * FROM billetera WHERE id_cliente='".$id."'";
            $record=$db->query($sql);
            $result=$record->fetch(PDO::FETCH_ASSOC);
            $db=null;
            $pdo=null;
            return $result['xpubCliente'];
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }

    //FUNCION PARA SABER SI EL USUARIO ES CEDIDO
    public function iscedido($id){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $sql="SELECT * FROM personascilente WHERE correoPersona='".$id."'";
            $record=$db->query($sql);
            $result=$record->fetch(PDO::FETCH_ASSOC);
            if ($result['heredado']=='Yes'){
                $db=null;
                $pdo=null;
                return false;
            }else{
                $db=null;
                $pdo=null;
                return true;
            }
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }

    //FUNCION PARA SABER SI EL CLIENTE HA PAGADO
    public function haspay($id){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $sql="SELECT `pago` FROM cliente WHERE idCliente='".$id."'";
            $record=$db->query($sql);
            $resultado=$record->fetch(PDO::FETCH_ASSOC);
            if($resultado=="Yes"){
                $db=null;
                $pdo=null;
                return true;
            }else{
                $db=null;
                $pdo=null;
                return false;
            }
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }

    //FUNCION PARA OBTENER LOS USUARIOS QUE SE HAN HEREDADO
    public function getHerencia($id){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $sql="SELECT correoPersona FROM personascilente WHERE heredado='Yes'";
            $record=$db->query($sql);
            $datos=$record->fetchAll();
            $cont=0;
            foreach ($datos as $dato) {
                $sql="SELECT nombreCliente,pago FROM cliente WHERE idCliente='".$dato['correoPersona']."'";
                $record=$db->query($sql);
                $res=$record->fetch(PDO::FETCH_ASSOC);
                $datos[$cont]['nombreCliente']=$res['nombreCliente'];
                $datos[$cont]['pago']=$res['pago'];
            }
        session_start();
        $_SESSION['heredados']=$datos;
        $db=null;
        $pdo=null;
        header("Location:../views/tablaHeredados.php");
        }catch(Exception $e){
            echo "Entro en el catch";
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }
    //FUNCION PARA TRAER A LOS HIJOS QUE SE PUEDEN ELIMINAR
    public function getDelete($id){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $sql="SELECT correoPersona FROM personascilente WHERE idRegistros='".$id."'";
            $record=$db->query($sql);
            if($record!=null){
                $datos=$record->fetchAll();
                $info=array();
                foreach ($datos as $dato) {
                    $sql="SELECT nombreCliente,apellidoCliente,pago FROM cliente WHERE idCliente='".$dato['correoPersona']."'";
                    $record=$db->query($sql);
                    $respuesta=$record->fetch(PDO::FETCH_ASSOC);
                    $dato['nombreCliente']=$respuesta['nombreCliente'];
                    $dato['apellidoCliente']=$respuesta['apellidoCliente'];
                    $dato['pago']=$respuesta['pago'];
                    if ($respuesta['pago']=="NO"){
                        $info[]=$dato;
                    }
               }
                echo "<pre>";
                var_dump($info);
                echo "</pre>";
                $_SESSION['usuariosDelete']=$info;
                $db=null;
                header('Location:../views/table_manage_rowreorder.php');
            }else{
                return null;
            }
        }catch(Exception $e){
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }
//Funcion para guardar el token unico para el cambio de contraseña
    public function guadarToken($token,$email){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $stmt=$db->prepare("UPDATE cliente SET resetToken=:token, resetComplete='no' WHERE idCliente=:email");
            $stmt->execute(array(':token' => $token,
                                 ':email'=>$email));
            $pdo=null;
            $db=null;
            $stmt=null;
        }catch(Exception $e){
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }
//fUNCION Para actualizar contraseña
    public function updatePassword($hashPass,$email){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $stmt=$db->prepare("UPDATE cliente SET password=:key, resetComplete='yes',resetToken='' WHERE idCliente=:email");
            $stmt->execute(array(':key' => $hashPass,
                                    ':email'=>$email));
            $pdo=null;
            $stmt=null;
            $db=null;
            header("Location:../views/changeSuccess.php");
        }catch(Exception $e){
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }
//Obtiene datos de pago de PayU
    public function getPayU($id){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $stmt=$db->prepare("SELECT merchantId,accountId,api_key,id_cliente FROM billetera WHERE id_cliente=:email");
            $stmt->execute(array(':email'=>$id['idRegistros']));
            $informacion=$stmt->fetch(PDO::FETCH_ASSOC);
            $stmt=null;
            $db=null;
            $pdo=null;
            return $informacion;
        }catch(Exception $e){
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }

//Traer padre de usuario
    public function getFather($id){
        $pdo=new DBConnection();
        $db=$pdo->DBConnect();
        try{
            $stmt=$db->prepare("SELECT idRegistros FROM personascilente WHERE correoPersona=:email");
            $stmt->execute(array(':email' => $id));
            $idPadre=$stmt->fetch(PDO::FETCH_ASSOC);
            echo $idPadre['idRegistros'];
            return $idPadre;
        }catch(Exception $e){
            $db->rollback();
            $db=null;
            echo $e->getMessage();
            return null;
        }
    }
/**
**/

//Funcion que trae a todos los usuarios y evalua sus fechas para saber si se elimina o se mantiene
    public function getAllUsers(){
      $pdo=new DBConnection();
      $db=$pdo->DBConnect();
      try{
        $stmt=$db->prepare("SELECT fechaRegistro,idCliente FROM cliente WHERE debePagar=1");
        $stmt->execute();
        $users=$stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($users as $user) {
          echo "<h1>".$user['fechaRegistro']."</h1>";
          $fechaActual=date('Y-m-d');
          echo "<h1>Fecha Actual:".$fechaActual."</h1>";
          $fechaRegistro=strtotime($user['fechaRegistro']);
          $fechaLimite=date('Y-m-d',strtotime($user['fechaRegistro']." + 30 days"));
          $fechaActual=new DateTime($fechaActual);
          $fechaLimite=new DateTime($fechaLimite);
          //$dif=date_diff();
          echo "<pre>";
          var_dump($fechaActual);
          echo "</pre>";
          echo "Fecha Limite";
          echo "<pre>";
          var_dump($fechaLimite);
          echo "</pre>";
          if ($fechaActual<=$fechaLimite){
            $dif=$fechaLimite->diff($fechaActual);
            echo "Sigues";
            $dias=$dif->days;
            echo $dias;
            //Finalmente se obtiene el valor de los dias,meses que faltan y de acuerdo a eso se le envia un correo avisando del plazo de pago
            if (($dias<=7)&&($dias>2)){
              $controlador=new UserController();
              $mensaje="Le Queda Menos De Una Semana Para Realizar El Pago";
              echo $mensaje;
              $controlador->enviarMailGenerico($user['idCliente'],$mensaje);
            }else{
              if ($dias<=2){
                $controlador=new UserController();
                $mensaje="Le Queda Un Dia Para Realizar EL Pago !!!!";
                echo $mensaje;
                $controlador->enviarMailGenerico($user['idCliente'],$mensaje);
              }else{
                echo "Tiene mas tiempo";
              }
            }
          }else{
            $dif=$fechaActual->diff($fechaLimite);
            echo "Te Elimino";
            $eliminar=new deleteModel();
            $eliminar->analizarSiEsHijo($user['idCliente']);
          }
        }
      }catch(Exception $e){
        $db->rollback();
        $db=null;
        echo $e->getMessage();
        return null;
      }
    }


    //Funcion Para Almacenar EL xpub de pago para el pago en bitcoin
    public function crearBilleteraBitcoin($xpub,$id_user){
      $pdo=new DBConnection();
      $db=$pdo->DBConnect();
      try{
        if ($this->existeBilletera($id_user)){
          echo "Tiene BILLETERA";
          $stmt=$db->prepare("UPDATE billetera SET xpubCliente=:xpub WHERE id_cliente=:idCliente");
          $stmt->execute(array(':xpub' => $xpub,':idCliente'=>$id_user));
          $stmt=null;
          $db=null;
          $pdo=null;
        }else{
          echo "No Tiene BILLETERA";
          $sql="INSERT INTO billetera (id_cliente,xpubCliente) VALUES ('".$id."','".$xpub."');";
          $record=$db->query($sql);
          $db=null;
          $pdo=null;
          $record=null;
        }
        header("Location:../views/dashboard.php");
      }catch(Exception $e){
        $db->rollback();
        $db=null;
        echo $e->getMessage();
        return null;
      }

    }

    public function existeBilletera($id_user){
      $pdo=new DBConnection();
      $db=$pdo->DBConnect();
      try{
        $sql="SELECT * FROM billetera WHERE id_cliente='".$id_user."'";
        $record=$db->query($sql);
        $result=$record->fetch(PDO::FETCH_ASSOC);
        if ($result!=null){
          return true;
        }else{
          return false;
        }
      }catch (Exception $e){
        $db->rollback();
        $db=null;
        echo $e->getMessage();
        return null;
      }
    }

}
