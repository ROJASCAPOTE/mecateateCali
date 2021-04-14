<?php

require_once 'Core/modeloAbstractoDB.php';

class Sede extends ModeloAbstractoDB {

    private $id;
    private $telefono;
    private $direccion;
    private $email;
    private $empresa;
    private $ciudad;
    private $descripcion;

    function __construct($id, $telefono, $direccion, $email, $empresa, $ciudad, $descripcion) {
        $this->id = $id;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->empresa = $empresa;
        $this->ciudad = $ciudad;
        $this->descripcion = $descripcion;
    }

    function getId() {
        return $this->id;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEmail() {
        return $this->email;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    protected function borrar() {
        
    }

    protected function consultar() {
        
    }

    protected function editar() {
        
    }

    protected function lista() {
        
    }

    protected function save() {
        
    }

    protected function nuevo() {
        
    }

}
