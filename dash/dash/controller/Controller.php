<?php
//header('Access-Control-Allow-Origin: *');
ini_set('display_errors', 1	); // 0 No show errors, 1

// User Controller
require_once './UserController.php';

$accion = filter_input(INPUT_POST, "accion");
if (filter_input(INPUT_POST, "accion") == NULL) {
    $accion = filter_input(INPUT_GET, "accion");
}

switch ($accion){
    //SE CREA UN NUEVO USUARIO SEGUN CONDICIONES
    case 'create':
        //Here code
        $user= new UserController();
        if ($_POST["email"]!=$_POST["email2"]){
            header("Location:html/extra_404_error.php");
        }else {
            session_start();
            if (isset($_SESSION["userObj"])){
                 if($_SESSION["userObj"]->getUsuariosRegistrados()<$_SESSION["cantRegist"]){
                    if ($user->isalredy($_POST["email"])){
                        $aux=$_SESSION["userObj"]->getUsuariosRegistrados();
                        $aux=$aux+1;
                        $_SESSION["userObj"]->setUsuariosRegistrados($aux);
                        $res=$user->create($_POST['firstName'],$_POST["password"],$_POST["email"],$_POST['lastName']);
                        echo $_SESSION["userObj"]->getUsuariosRegistrados($aux);
                        $user->updateUsuariosRegistrados($_SESSION["userObj"]->getUsuariosRegistrados(),$_SESSION["userObj"]->getIduser());
                        }else echo "EL USUARIO YA EXISTE";
                    header("Location: ../views/dashboard.php");
                }else{
                    echo "No puede Añadir mas Usuarios";
                }
            }else $res=$user->create($_POST['firstName'],$_POST["password"],$_POST["email"],$_POST['lastName']);
        }
        break;
        //CASO EN EL CUAL SE INGRESA UN USUARIO EXISTENTE Y EN CASO CONTRARIO ERROR
    case 'login':
            try {
                $user = new UserController();
                $res = $user->login(filter_input(INPUT_POST, "password"), filter_input(INPUT_POST, "email") );
                //echo $res;
            }catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        break;
//CASO EN EL CUAL UN USUARIO YA CON SU RESPECTIVO PAGO SE REGISTRA SUS USUARIOS
    case 'registrosDelUsuario':
            session_start();
            $user= new UserController();
            $user->obtenerRegistros($_SESSION["userObj"]->getIduser());
            header("Location:../views/table_manage_responsive.php");
        break;
//CASO EN EL CUAL EL USUARIO DESEA REINICIAR SU CONTRASEÑA
    case 'reset':
            try{
                $user= new UserController();
                $user->reset($_POST['email']);

            }catch(Exception $exc){
                echo $exc->getTraceAsString();
            }
        break;
//CASO PARA EL CAMBIO DE IMAGEN DE PERFIL DEL USUARIO
    case 'imag':{
            SESSION_START();
            $nomb_img=$_FILES['imgUsr']['name'];
            echo $nomb_img;
            $tipo_imagen=$_FILES['imgUsr']['type'];
            $tamano_imagen=$_FILES['imgUsr']['size'];
            echo $_FILES['imgUsr']['tmp_name'];
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT']."/MVCingeAlex/mvc/views/assets/img/imgUsers";
            //Se Sube La IMG al Server Asumiendo Su Validez
            //Validaciones
            if ($tamano_imagen<=1000000){
                if ($tipo_imagen=="image/jpg"||$tipo_imagen=="image/png"||$tipo_imagen=="image/jpeg"){
                move_uploaded_file($_FILES['imgUsr']['tmp_name'],$carpeta_destino."/".$nomb_img);
                $user= new UserController();
                $ubicacion="assets/img/imgUsers/".$nomb_img;
                $user->actualizarImagen($ubicacion,$_SESSION['userObj']->getIduser());
                $_SESSION['userObj']->setImagenUsuario($ubicacion);
                header("Location:../views/dashboard.php");
                }else{
                    session_unset();
                    session_destroy();
                    @session_start();
                    session_unset();
                    session_destroy();
                    header("Location:../views/extra_404_error.php");
                }
            }else{
                header("Location:../views/extra_404_error.php");
            }
            break;
    }
    //PARA PAGAR  A QUIEN CORRESPONDA
    case 'pagar':
        //ASUMIENDO QUE YA ESTA LA PARTE DEL PAGO
        session_start();
        $user= new UserController();
        $data=$user->activarPago($_SESSION["userObj"]->getIduser());
        $_SESSION["userObj"]->setPago($data->getPago());
        $data=null;
        if ($user->tienePadre($_SESSION["userObj"]->getIduser())){
            if ($user->esCedible($_SESSION["userObj"]->getIduser())==true){
                echo "Entro a el if para ceder los Usuarios";
                $user->cederPersonas($_SESSION["userObj"]->getIduser());
            }else{
                header("Location:../views/dashboard.php");
            }
        }else{
            header("Location:../views/dashboard.php");
        }
    break;
    //Cargar los datos de payU y Su Respectiva Vista
    case 'payView':
        session_start();
        $user=new UserController();
        $numReg=$_SESSION['userObj']->getnumeroRegistro();
        $nombreDelPadre=$user->getFather($_SESSION['userObj']->getIduser());
        $nombreDelPadre=$nombreDelPadre['idRegistros'];
        //Preguntamos si tiene padre el padre del registro a liquidar si no tiene se le Liquida a la cabeza que seria el unico padre
        if ($user->tienePadre($nombreDelPadre)){
          echo "Significa que debe liquidar a su abuelo";
            //significa que no es hijo de la cabeza
                  if (($numReg==1)||($numReg==3)){
                    //Se Le Liquida Al Padre Del Padre Debido a que este registro se debe ceder
                    $idAbuelo=$user->getFather($nombreDelPadre);
                    $user->obtenerDatosPayU($idAbuelo);
                  }else{
                    echo "Debe pagarle a su padre inmediato";
                    $idPadre=$user->getFather($_SESSION['userObj']->getIduser());
                    $user->obtenerDatosPayU($idPadre);
                  }
        }else{
          //Significa que es el hijo de una cabeza y por lo tanto este debe pagarle a su unico padre ya obtenido anteriormente
            $nombreDelPadre=$user->getFather($_SESSION['userObj']->getIduser());
            $user->obtenerDatosPayU($nombreDelPadre);
        }
        //$user->obtenerXPub($_SESSION['userObj']->getIduser());

    break;
    //CASO DE BITCOIN
    case 'payView2':
        session_start();
        $user=new UserController();
        $numReg=$_SESSION['userObj']->getnumeroRegistro();
        $nombreDelPadre=$user->getFather($_SESSION['userObj']->getIduser());
        $nombreDelPadre=$nombreDelPadre['idRegistros'];
        //Preguntamos si tiene padre el padre del registro a liquidar si no tiene se le Liquida a la cabeza que seria el unico padre
        if ($user->tienePadre($nombreDelPadre)){
          echo "Significa que debe liquidar a su abuelo";
            //significa que no es hijo de la cabeza
                  if (($numReg==1)||($numReg==3)){
                    //Se Le Liquida Al Padre Del Padre Debido a que este registro se debe ceder
                    $idAbuelo=$user->getFather($nombreDelPadre);
                    $user->obtenerXPub($idAbuelo);
                  }else{
                    echo "Debe pagarle a su padre inmediato";
                    $idPadre=$user->getFather($_SESSION['userObj']->getIduser());
                    $user->obtenerXPub($idPadre);
                  }
        }else{
          //Significa que es el hijo de una cabeza y por lo tanto este debe pagarle a su unico padre ya obtenido anteriormente
            $nombreDelPadre=$user->getFather($_SESSION['userObj']->getIduser());
            $user->obtenerXPub($nombreDelPadre);
        }
        //$user->obtenerXPub($_SESSION['userObj']->getIduser());

    break;
    //CERRAR LA SESION DEL USUARIO DE MANERA ABSOLUTA
    case 'exit':
            session_unset();
            session_destroy();
            @session_start();
            session_unset();
            session_destroy();
            header("Location:../views/index.php");
    break;
    //ALMACENAR DATOS PayU
    case 'storeInfo':
    if (isset($_POST['comercio'])){
            session_start();
            $user= new UserController();
            $user->actualizarPayu($_POST['comercio'],$_POST['cuenta'],$_POST['api_key'],$_SESSION['userObj']->getIduser());
           header("Location:../views/dashboard.php");
    }else{
      header("Location:../views/extra_profile.php");
    }
    break;
    //ALMACENAR DIR DE BILLETERA PARA GENERAR CODIGOS DE Pago
    case 'xpub':
      if (isset($_POST["xpubUser"])){
        echo "correcto";
        session_start();
        $user=new UserController();
        $user->guardarxPub($_POST["xpubUser"],$_SESSION['userObj']->getIduser());
      }else{
        echo "No Se Envio Nada";
      }
    break;
    //PARA CARGAR LOS USUARIOS QUE SE ME HEREDAN
    case 'heredados':
        session_start();
        $user=new UserController();
        $user->obtenerHeredados($_SESSION['userObj']->getIduser());
    break;
    //CASO PARA CARGAR LOS REGISTROS DEL USUARIO Y PERMITIR ELIMINARLOS ANTES DE TIEMPO SEGUN CORRESPONDA (SOLO SALEN LOS REGISTROS QUE NO HAN PAGADO AUN)
    case 'usuariosEliminar':
        session_start();
        $user=new UserController();
        $user->obtenerEliminar($_SESSION['userObj']->getIduser());
    break;
    //CASO PARA ENVAR EL CORREO PARA CAMBIAR LA CONTRASEÑA DEL USUARIO EN CASO DE QUE ESTE LA HAYA OLVIDADO
    case 'claveOlvidada':
        session_start();
        if (isset($_POST['email'])){
        $user=new UserController();
        if (!$user->enviarEmail($_POST['email'])){
            echo "Correo Invalido";
            $_SESSION['noExiste']=true;
            header("Location:../views/forgottenPassword.php");
        }else{
            header("Location:../views/index.php");
        }
    }
    break;
    //CASO PARA ACTUALIZAR LA CLAVE SEGUN CONDICIONES
    case 'actualizarClave':
    if (isset($_POST['password1'])){
        //Resto del codigo
        $newKey=$_POST['password1'];
        $user=new UserController();
        $user->updatePassword($newKey,$_POST['email']);

    }
    break;
    //Caso De Prueba En EL cual Se Va A crear lA fUNCION Para evaluar las fechas de REGISTRO
    case 'revision' :
      $usrControl=new UserController();
      $usrControl->evaluarPagos();
    break;
    default:
    //SE ENVIA A La Pagina 404
        break;
}
