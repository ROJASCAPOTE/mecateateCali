<?php

class Usuario_Rol {

    private $id;
    private $usuacedu;
    private $rol;
    private $estado;

    public function __construct($id, $usuacedu, $rol, $estado) {
        $this->id = $id;
        $this->usuacedu = $usuacedu;
        $this->rol = $rol;
        $this->estado = $estado;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuacedu() {
        return $this->usuacedu;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuacedu($usuacedu) {
        $this->usuacedu = $usuacedu;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

}
?>