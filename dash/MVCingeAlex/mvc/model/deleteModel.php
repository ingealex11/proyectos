<?php
require_once '../config/DBConnection.php';
require_once 'User.php';

 /**
  * Clase La Cual Se Encargara de eliminar a los usuarios segun Condiciones
  */
 class deleteModel extends User {
   private $table;
   function __construct()
   {
     $this->table = "cliente";
     parent::__construct($this->table);
   }
   //Funciones Al Respecto

   //Funcion en la cual se analiza si es hijo de alguien y su es el caso el usuario se evalua sus hijos para darselos a su padre
   public function analizarSiEsHijo($emailCliente){
     $pdo=new DBConnection();
     $db=$pdo->DBConnect();
     echo $emailCliente;
     try{
       $stmt=$db->prepare("SELECT * FROM `personascilente` WHERE correoPersona=:email");
       $stmt->execute(array(':email'=>$emailCliente));
       $user=$stmt->fetch(PDO::FETCH_ASSOC);
    if($user==null){
      //No Se Elimina significa que es cabeza
    }else{
       //Se Traen Sus registros
       $padre=$this->getFather($emailCliente);
       $registros=$this->traerRegistros($emailCliente);
       echo "Padre Del Usuario A Eliminar";
       echo $padre;
       echo "<h2>Registros A Cambiar De Padre</h2>";
       echo "<pre>";
       var_dump($registros);
       echo "</pre>";
       foreach ($registros as $registro) {
         # code...
         echo "<pre>";
         print_r($registro);
         echo "</pre>";
         $this->updateUsers($registro['correoPersona'],$padre);
       }
       //Finalmente Se LLama A La Funcion De Eliminar
       if ($this->isDelete($emailCliente)){
         echo "Es Eliminable";
         //No Existes
        //$this->deleteUser();
       }else{
         echo "No Es Eliminable";
         //Te Suspendo Existes Pero Estaras Bloqueado
         //$this->suspender();

       }
    }
     }catch(Exception $e){
       $db->rollback();
       $db = null;
       echo $exc->getMessage();
       return null;
     }
   }
   //Funciuon para Traer Los Registros DeL Usuario a Eliminar o Retirar
   public function traerRegistros($emailCliente){
     $conexion=new DBConnection();
     $pdo=$conexion->DBConnect();
     try{
       $stmt=$pdo->prepare("SELECT correoPersona FROM `personascilente` WHERE idRegistros=:email");
       $stmt->execute(array(":email"=>$emailCliente));
       $datos=$stmt->fetchAll(PDO::FETCH_ASSOC);
       return $datos;
     }catch(Exeption $e){
       $db->rollback();
       $db = null;
       echo $exc->getMessage();
       return null;
     }
   }

   //Funcion Para Cambiar El Padre De Los Registros Hijos
   public function updateUsers($dato,$emailPadre){
     $conexion=new DBConnection();
     $pdo=$conexion->DBConnect();
     try{
        $stmt=$pdo->prepare("UPDATE `personascilente` SET idRegistros=:dato WHERE correoPersona=:email");
        $stmt->execute(array(':dato' => $emailPadre,
                              ':email'=>$dato));

     }catch(Exeption $e){
       $db->rollback();
       $db = null;
       echo $exc->getMessage();
       return null;
     }
   }

   //Funciuon Para Traer El Padre Del Usuario A Eliminar
   public function getFather($emailCliente){
     $conexion=new DBConnection();
     $pdo=$conexion->DBConnect();
     try{
       $stmt=$pdo->prepare("SELECT idRegistros FROM  `personascilente` WHERE correoPersona=:email");
       $stmt->execute(array('email'=>$emailCliente));
       $emailPadre=$stmt->fetch(PDO::FETCH_ASSOC);
       return $emailPadre['idRegistros'];
     }catch(Exeption $e){
       $db->rollback();
       $db = null;
       echo $exc->getMessage();
       return null;
     }
   }
   //Funcion Para Eliminar El Usuario o En Su Caso Suspender Del SISTEMA
   public function deleteUser($email){
     $pdo= new DBConnection();
     $db=$pdo->DBConnect();
     try{
       $stmt=$pdo->prepare("DELETE FROM cliente WHERE idCliente=:email");
       $stmt->execute(array(':email' => $email));
       $stmt=$pdo->prepare("SELECT idRegistros FROM `personascilente` WHERE correoPersona=:email");
       $stmt->execute(array(':email'=> $email));
       $correo=$stmt->fetch(PDO::FETCH_ASSOC);
       $correo=$correo['idRegistros'];
       if ($this->updateRegistros($correo)){
          $stmt=$pdo->prepare("DELETE FROM `personascilente` WHERE correoPersona=:email");
          $stmt->execute(array(":email"=> $email));
       }
     }catch(Exeption $e){
       $db->rollback();
       $db = null;
       echo $exc->getMessage();
       return null;
     }
   }
   //Funcion Para Encontrar El Numero De PAGO para Saber Si Se Elimina o Suspende
   public function isDelete($correo){
     $pdo=new DBConnection();
     $db=$pdo->DBConnect();
     try{
       $stmt=$db->prepare("SELECT pago FROM cliente WHERE idCliente=:email");
       $stmt->execute(array(':email'=> $correo));
       $dato=$stmt->fetch(PDO::FETCH_ASSOC);
       if ($dato['pago']=='YES'){
         return false;
       }else{
         if ($dato['pago']=='NO'){
           return true;
         }
       }
     }catch(Exception $e){
       $db->rollback();
       $db = null;
       echo $exc->getMessage();
       return null;
     }
   }

   //Funcion Para Suspender A Un Usuario
   public function suspender($id_cliente){

   }

   public function updateRegistros($padre){
     $pdo=new DBConnection();
     $db=$pdo->DBConnect();
     try{
       $stmt=$db->prepare("SELECT usuariosRegistrados FROM cliente WHERE idCliente=:email");
       $stmt->execute(array(":email"=> $padre));
       $numReg=$stmt->fetch(PDO::FETCH_ASSOC);
       $numReg--;
       $stmt=$db->prepare("UPDATE cliente SET usuariosRegistrados=:registro");
       $stmt->execute(array(':registro'=>$numReg));
       return true;
     }catch(Exeption $e){
       $db->rollback();
       $db = null;
       echo $exc->getMessage();
       return null;
     }
   }
 }
