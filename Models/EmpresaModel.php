<?php

require_once 'Core/modeloAbstractoDB.php';

class Empresa extends ModeloAbstractoDB {

    private $id;
    private $emprnit;
    private $nombre;
    private $nomrazsoc;

    function __construct($id, $emprnit, $nombre, $nomrazsoc) {
        $this->id = $id;
        $this->emprnit = $emprnit;
        $this->nombre = $nombre;
        $this->nomrazsoc = $nomrazsoc;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmprnit() {
        return $this->emprnit;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getNomrazsoc() {
        return $this->nomrazsoc;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setEmprnit($emprnit): void {
        $this->emprnit = $emprnit;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setNomrazsoc($nomrazsoc): void {
        $this->nomrazsoc = $nomrazsoc;
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

?>