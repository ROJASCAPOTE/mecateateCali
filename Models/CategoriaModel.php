<?php

require_once 'modeloAbstractoDB.php';

class Categoria extends ModeloAbstractoDB
{

    private $id;
    private $nombre;

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function nuevo($ms_data = array())
    {
        if (array_key_exists('nombre', $ms_data)) :
            foreach ($ms_data as $key => $value) {
                $key = $value;
            }
            $nombreCategoria = utf8_decode($nombre);
            $this->query = "INSERT INTO categoria (id, nombre) VALUES(null,'$nombreCategoria');";
            $save = $this->ejecutar_query_simple();
            $result = false;
            if ($save) {
                $result = true;
            }
            return $result;
        endif;
    }

    public function editar()
    {
        
    }

    public function borrar()
    {
    }

    public function consultar()
    {
    }

    public function lista()
    {
        $this->query = "SELECT * FROM categoria ORDER BY id DESC";
        $this->obtener_resultados_query();
        return $this->rows;
    }
}
