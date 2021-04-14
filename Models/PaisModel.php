<?php

require_once 'Core/modeloAbstractoDB.php';

class Pais extends ModeloAbstractoDB {

    private $id;
    private $nombre;
    private $last_Update;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getLast_Update() {
        return $this->last_Update;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setLast_Update($last_Update): void {
        $this->last_Update = $last_Update;
    }

    public function getAll() {
        $paises = $this->db->query("SELECT * FROM pais");
        return $paises;
    }

    public function save() {

        $sql = "INSERT INTO pais (ID, NOMBRE) VALUES(null,'{$this->getNombre()}');";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    protected function borrar() {
        
    }

    protected function consultar() {
        
    }

    protected function editar() {
        
    }

    protected function lista() {
        
    }

    protected function nuevo() {
        
    }

}
