<?php

require_once 'modeloAbstractoDB.php';

class SubCategoria extends ModeloAbstractoDB {

    private $id;
    private $nombre;
    private $categoria_id;

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoria_id() {
        return $this->categoria_id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    

    public function nuevo($ms_data = array()) {
        if (array_key_exists('nombre', $ms_data)) :
            foreach ($ms_data as $key => $value) {
                $key = $value;
            }
            $this->query = "INSERT INTO subcategoria (id, nombre, categoria_id) VALUES(null,'$nombre', $getCategoria_id)";
            $save = $this->ejecutar_query_simple();
            $result = false;
            if ($save) {
                $result = true;
            }

            return $result;
        endif;
    }

    protected function borrar() {
        
    }

    protected function consultar() {
        
    }

    protected function editar() {
        
    }

    public function lista() {
        $this->query=("SELECT * FROM subcategoria ORDER BY id DESC");
        $this->obtener_resultados_query();
        return $this->rows; 
    }

    

}
