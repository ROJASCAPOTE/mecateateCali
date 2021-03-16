<?php

class Usuario {
    private $usuaCedu;
    private $usuaPrinombre;
    private $usuaSegNombre;
    private $usuaPriApellido;
    private $usuaSegApellido;
    private $telefono;
    private $celular;
    private $direccion;
    private $login;
    private $password;
    private $email;
    private $sede;
    private $fechaCreacion;
    private $fechaModificacion;

    function __construct($usuaCedu, $usuaPrinombre, $usuaSegNombre, $usuaPriApellido, $usuaSegApellido, $telefono, $celular, $direccion, $login, $password, $email, $sede, $fechaCreacion) {
        $this->usuaCedu = $usuaCedu;
        $this->usuaPrinombre = $usuaPrinombre;
        $this->usuaSegNombre = $usuaSegNombre;
        $this->usuaPriApellido = $usuaPriApellido;
        $this->usuaSegApellido = $usuaSegApellido;
        $this->telefono = $telefono;
        $this->celular = $celular;
        $this->direccion = $direccion;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->sede = $sede;
        $this->fechaCreacion = $fechaCreacion;
    }

    public function getUsuaCedu() {
        return $this->usuaCedu;
    }

    public function getUsuaPrinombre() {
        return $this->usuaPrinombre;
    }

    public function getUsuaSegNombre() {
        return $this->usuaSegNombre;
    }

    public function getUsuaPriApellido() {
        return $this->usuaPriApellido;
    }

    public function getUsuaSegApellido() {
        return $this->usuaSegApellido;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSede() {
        return $this->sede;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getFechaModificacion() {
        return $this->fechaModificacion;
    }

    public function setUsuaCedu($usuaCedu) {
        $this->usuaCedu = $usuaCedu;
    }

    public function setUsuaPrinombre($usuaPrinombre) {
        $this->usuaPrinombre = $usuaPrinombre;
    }

    public function setUsuaSegNombre($usuaSegNombre) {
        $this->usuaSegNombre = $usuaSegNombre;
    }

    public function setUsuaPriApellido($usuaPriApellido) {
        $this->usuaPriApellido = $usuaPriApellido;
    }

    public function setUsuaSegApellido($usuaSegApellido) {
        $this->usuaSegApellido = $usuaSegApellido;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSede($sede) {
        $this->sede = $sede;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function setFechaModificacion($fechaModificacion) {
        $this->fechaModificacion = $fechaModificacion;
    }

    public function __toString() {
        
    }

}

?>