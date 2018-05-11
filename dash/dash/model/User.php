<?php

class User {

    private $iduser;
    private $userName;
    private $password;
    private $userLastName;
    private $active;
    private $resetToken;
    private $resetComplete;
    private $usuariosRegistrados;
    private $imagenUsuario;
    private $registroFK;
    private $maxReg;
    private $numeroRegistro;
    private $pago;

    public function __construct(){

    }

    function getIduser() {
        return $this->iduser;
    }

    function getUser() {
        return $this->userName;
    }

    function getPassword() {
        return $this->password;
    }

    function getLastName() {
        return $this->userLastName;
    }

    function getActive(){
        return $this->active;
    }

    function getUsuariosRegistrados(){
        return $this->usuariosRegistrados;
    }

    function getImagenUsuario(){
        return $this->imagenUsuario;
    }

    function getRegistroFK(){
        return $this->registroFK;
    }

    function getnumeroRegistro(){
        return $this->numeroRegistro;
    }

    function getPago(){
        return  $this->pago;
    }

    function setPago($pay){
        $this->pago=$pay;
    }

    function setnumeroRegistro($num){
     $this->numeroRegistro=$num;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }

    function setUser($userName) {
        $this->userName = $userName;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setLastName($lastName) {
        $this->userLastName = $lastName;
    }

    function setActive($active){
        $this->active=$active;
    }

    function setUsuariosRegistrados($numUsers){
        $this->usuariosRegistrados=$numUsers;
    }

    function setImagenUsuario($image){
        $this->imagenUsuario=$image;
    }

    function setRegistroFK($registro){
        $this->registroFK=$registro;
    }
}
