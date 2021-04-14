<?php

require_once 'modeloAbstractoDB.php';

class Rol extends ModeloAbstractoDB {

    private $id;
    private $nombre;
    private $descripcion;
    private $status;


    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function consultar() {
        
    }

    public function nuevo($rol_data = array()) {
        foreach (rol_data as $key => $value) {
            $key = $value;
        }
        $this->query = "REPLACE INTO status (status_id, status) VALUES ($status_id, '$status')";
        $this->set_query();
    }

    public function editar() {
        
    }

    public function lista() {
        $this->query = "SELECT * FROM `rol` WHERE `status`!=0";
        $this->obtener_resultados_query();
        return $this->rows;
    }

    protected function borrar() {
        
    }

   

}

?>