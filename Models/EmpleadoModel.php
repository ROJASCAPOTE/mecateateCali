<?php

require_once 'Core/modeloAbstractoDB.php';

class Empleado extends ModeloAbstractoDB {

    protected $id;
    protected $sede;
    protected $area;
    protected $profesion;
    protected $descripcion;
    protected $fechaIngreso;
    protected $acceUser;
    protected $lastUpdate;

//$sede, $area, $profesion, $descripcion, $fechaIngreso, $acceUser
    public function __construct($sede, $area, $profesion, $descripcion, $fechaIngreso, $acceUser, $lastUpdate) {
        $this->sede = $sede;
        $this->area = $area;
        $this->profesion = $profesion;
        $this->descripcion = $descripcion;
        $this->fechaIngreso = $fechaIngreso;
        $this->acceUser = $acceUser;
        $this->lastUpdate = $lastUpdate;
    }

    public function getId() {
        return $this->id;
    }

    public function getSede() {
        return $this->sede;
    }

    public function getArea() {
        return $this->area;
    }

    public function getProfesion() {
        return $this->profesion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    public function getAcceUser() {
        return $this->acceUser;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setSede($sede) {
        $this->sede = $sede;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setProfesion($profesion) {
        $this->profesion = $profesion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setFechaIngreso($fechaIngreso) {
        $this->fechaIngreso = $fechaIngreso;
    }

    public function setAcceUser($acceUser) {
        $this->acceUser = $acceUser;
    }

    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;
    }

    protected function consultar() {
        
    }

    protected function nuevo() {
        
    }

    protected function editar() {
        
    }

    protected function lista() {
        
    }

    protected function borrar() {
        
    }

}
