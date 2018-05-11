<?php
require_once '../config/properties.php';
require_once '../model/UserModel.php';
include ('../phpmailer/mail.php');

class UserController{

    public function __construct() {
    }
    //Funcion encargada de crear el objeto del usuario el cual haya ingresado a la plataforma
    public function login($password,$userName){
        try {
            $user = new UserModel;
            $user->setIduser($userName);
            $user->setPassword($password);
            $response = $user->login();
            $usuario= new User();
            if ($response==null){
                header("Location:../views/extra_404_error.php");
            }else{
            if ($response["active"]=="Yes"){
                session_start();
                $numReg=$user->getNumReg($response["idCliente"]);
                $usuario->setIduser($response["idCliente"]);
                $usuario->setPassword($response["password"]);
                $usuario->setActive($response["active"]);
                $usuario->setUser($response["nombreCliente"]);
                $usuario->setLastName($response["apellidoCliente"]);
                $usuario->setUsuariosRegistrados($response["usuariosRegistrados"]);
                $usuario->setImagenUsuario($response["imagenPerfil"]);
                $usuario->setPago($response['pago']);
                $usuario->setnumeroRegistro($numReg);
                $numReg=null;
                if(!$user->hasFather($response["idCliente"])){
                    $usuario->setPago('YES');
                }
                if ($response["primerUsuario"]==1){
                    $_SESSION["cantRegist"]=10;
                }else{
                    $_SESSION["cantRegist"]=4;
                }
                $_SESSION["userObj"]=$usuario;
                $response=null;
                header("Location:../views/dashboard.php");
            }else{
                if ($response==null){
                header("Location:../views/noValido.php");
              }else header("Location:../views/page_without_sidebar.php");//No activo
            }
            return var_dump($response);
        }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return 0;
        }
    }
    //FUNCION ENCARGADA DE CREAR UN USUARIO NUEVO
    public function create($userName,$password,$email,$userLastName){
        try {
        $user = new UserModel;
        $user->setUser($userName);
        $opciones=array(
                        'cost'=> 12
         );
        $hashed_password= password_hash($password, PASSWORD_BCRYPT, $opciones);
        $password=$hashed_password;
        $user->setPassword($password);
        $user->setIduser($email);
        $user->setLastName($userLastName);
        $activation=md5(uniqid(rand(),true));
        $user->setActive($activation);
        $response = $user->create();
        define('DIR','localhost/MVCingeAlex/mvc/activation/');
        define('SITEEMAIL','noreply@domain.com');
        $to=$email;
        $subject="Confirmar Registro";
        $body="Para Activar Tu Cuenta Por Favor dale Click a este Link:<a href='".DIR."activation.php?x=$email&y=$activation'>".DIR."activation.php?x=$email&y=$activation";
        $mail = new Mail();
        //Me Ocurrio Un Error de Certificado asi que inclui estas lineas de codigo que lo solucionan
        $mail->smtpConnect(
                            array(
                                "ssl" => array(
                                    "verify_peer" => false,
                                    "verify_peer_name" => false,
                                    "allow_self_signed" => true
                                )
                            )
                        );
        $mail->setFrom(SITEEMAIL);
        $mail->addAddress($to);
        $mail->subject($subject);
        $mail->body($body);
        $mail->send();
        echo $to;
        //header("Location:http://seantheme.com/color-admin-v1.9/admin/html/index.html");
        return json_encode($response);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return 0;
        }
    }
    //FUNCION PARA SABER SI EXISTE UN USUARIO
    public function isalredy($id){
        $user= new UserModel();
        if ($user->existeUsuario($id)){
            return true;
        }else return false;
    }
    //FUNCION PARA ALMACENAR Los Datos de PayU DEL USUARIO
    public function actualizarPayu($id_comercio,$num_cuenta,$api_key,$id){
        $user= new UserModel();
        $user->crearBilletera($id_comercio,$id,$num_cuenta,$api_key);
        //header("Location:../views/dashboard.php");
    }
    //Funcion para ALMACENAR el XPub de la billetera del usuarios
    public function guardarxPub($xpub,$id_user){
      $user=new UserModel();
      $user->crearBilleteraBitcoin($xpub,$id_user);
    }

    //funcion encargada de ceder los usuarios segun condiciones
    public function cederPersonas($id){
        $user= new UserModel();
        //Preguntamos si el usuario ha sido cedido por la condicion de pago
        if($user->iscedido($id)){
          //Si Es Asi Lo Cedemos
            $user->cederCliente($id);
        }else{
            header('Location:../views/dashboard.php');
        }
    }
    //funcion que para saber si el usuario es cedible o no
    public function esCedible($id){
        $user= new UserModel();
        $num=$user->getNumReg($id);
        if (($num==1)||($num==3)){
            return true;
        }else{
            return false;
        }
    }
    //Funcion para actualizar la cantidad de registros de un usuario
    public function updateUsuariosRegistrados($numReg,$idU){
        $user= new UserModel();
        $user->actualizarUsuariosRegistrados($numReg,$idU);
    }
    //Funcion para obtener Los Usuarios Registrados Del Cliente
    public function obtenerRegistros($idCliente){
        $user= new UserModel();
        $user->obtenerRegistrados($idCliente);
    }
    //Funcion para actualizar la Imagen De Perfil
    public function actualizarImagen($nomb_img,$idCliente){
        $user= new UserModel();
        $user->actualizarImagen($nomb_img,$idCliente);
    }
    //Funcion para activar el pago ya verificado
    public function activarPago($idCliente){
        $user= new UserModel();
        $user->activatePay($idCliente);
        return $user;
    }
    //Funcion para conocer si el usuario es cabeza o no
    public function tienePadre($id){
        $user= new UserModel();
        if($user->hasFather($id)){
            return true;
        }else{
            return false;
        }
    }
    //Funcion para obtener el XPub del Usuario
    public function obtenerXPub($id){
        $user= new UserModel();
        $billetera= $user->getXPub($id['idRegistros']);
        if ($billetera!=null){
          $_SESSION['xpub']=$billetera;
          header("Location:../bitcoin/configuracionBitcoin.php");
        }else {
          echo "error";
        }

    }
    //Funcion para obtener los datos de payU
    public function obtenerDatosPayU($id){
        $user=new UserModel();
        $datos=$user->getPayU($id);
        echo "<pre>";
        var_dump($datos);
        echo "</pre>";
        $_SESSION['datosPago']=$datos;
        header("Location:../views/pago.php");
    }
    //Funcion para obtener los registros que me han sido heredados
    public function obtenerHeredados($id){
        $user= new UserModel();
        $user->getHerencia($id);
    }
    //Funcion para obtener los usuario que se pueden eliminar
    public function obtenerEliminar($id){
        $user=new UserModel();
        $user->getDelete($id);
    }
    //Funcion para el envio de un correo para solicitar el cambio de contraseña del usuario
    public function enviarEmail($email){
        $user=new UserModel();
        //echo $email;
        if(!$user->existeUsuario($email)){
            //Se ENVIA EL EMAIL
            $token = md5(uniqid(rand(),true));
            $user->guadarToken($token,$email);
            define('DIR','localhost/MVCingeAlex/mvc/reset/');
            define('SITEEMAIL','noreply@domain.com');
            $to=$email;
            $subject="Ha Olvidado Su Contraseña?";
            $body="Para Cambiar Tu Contraseña Por Favor dale Click a este Link:<a href='".DIR."resetPassword.php?key=$token'>".DIR."resetPassword.php?key=$token";
            $mail = new Mail();
            //Me Ocurrio Un Error de Certificado asi que inclui estas lineas de codigo que lo solucionan
            $mail->smtpConnect(
                                array(
                                    "ssl" => array(
                                        "verify_peer" => false,
                                        "verify_peer_name" => false,
                                        "allow_self_signed" => true
                                    )
                                )
                            );
            $mail->setFrom(SITEEMAIL);
            $mail->addAddress($to);
            $mail->subject($subject);
            $mail->body($body);
            $mail->send();
            return true;

        }else{
            return false;
        }
    }
    // Funcion que encripta y actualiza la contraseña del usuario en caso de ser olvidada
    public function updatePassword($pass,$email){
        $opciones=array(
                            'cost'=> 12,
                            //'salt'=>mcrypt_create_iv(22,MCRYPT_DEV_URANDOM)
             );
        $hashed_password= password_hash($pass, PASSWORD_BCRYPT, $opciones);
        $user=new UserModel();
        $user->updatePassword($hashed_password,$email);

    }
    //Funcion para saber si es cabeza
    public function esCabeza($idUsr){
        $user=new UserModel();
        if ($user->hasFather($idUsr)){
            return true;
        }else{
            return false;
        }
    }
    //Funcion para obtener el id del padre
    public function getFather($id){
        $user=new UserModel();
        return $user->getFather($id);

    }
    //Funcion Para enviar El Correo De Advertencia Del Pago y En Caso De que se llegue al Limite se Elimina y se reorganizan los registros
    public function evaluarPagos(){
      //Se Intancia La variable tipo modelUser Para Traer A Todos Los Clientes
      $clientes=new UserModel();
      $clientes->getAllUsers();
    }

    public function enviarMailGenerico($correoPersona,$mensaje){
      //Se Le Envia El Respectivo Correo De Advetencia
      $mail= new Mail();
      define('DIR','localhost/MVCingeAlex/mvc/');
      define('SITEEMAIL','noreply@domain.com');
      $to=$correoPersona;
      $subject=$mensaje;
      $body="Por Favor Realize El Pago a Su Auspiciador Para Obtener El Siguiente Nivel Si No Lo Hace Se Eliminara Del Sistema";
      $mail->smtpConnect(
                          array(
                              "ssl" => array(
                                  "verify_peer" => false,
                                  "verify_peer_name" => false,
                                  "allow_self_signed" => true
                              )
                          )
                      );
      $mail->setFrom(SITEEMAIL);
      $mail->addAddress($to);
      $mail->subject($subject);
      $mail->body($body);
      $mail->send();
      //echo $correoPersona;
    }
}
//Funcion para encriptar el XPUB
 function encrypt ($string) {
    $key = "";
    return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
}
//  FUNCOIN PARA DESENCRIPTAR EL XPUB
function decrypt ($string) {
    $key = "";
    return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
}
