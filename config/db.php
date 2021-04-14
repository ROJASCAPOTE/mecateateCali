<?php


class Database {

    private static $db_host = "localhost";
    private static $db_user = "root";
    private static $db_pass = "";
    protected $db_name = "mecato_valluno";
    protected $query;
    protected $rows = array();
    private $conexion;

    public static function connect() {
        $db = new mysqli('localhost', 'root', '', 'mecato_valluno');
        return $db;
    }

    private function abrir_conexion() {
        $this->conexion = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
    }

    protected function ejecutar_query_simple() {
        try {
            $this->abrir_conexion();
            $this->conexion->query($this->query)
                    or die(mysqli_errno($this->conexion) . " : "
                            . mysqli_error($this->conexion) . "  | Query=" . $this->query);
            $resultado = $this->conexion->affected_rows;
            $this->cerrar_conexion();
            return $resultado;
        } catch (Exception $e) {
            echo "Error! : " . $e->getMessage();
            return false;
        }
    }

# Traer resultados de una consulta en un Array

    protected function obtener_resultados_query() {
        try {
            $this->abrir_conexion();
            $result = $this->conexion->query($this->query)
                    or die(mysqli_errno($this->conexion) . " : "
                            . mysqli_error($this->conexion) . " | Query=" . $this->query);

            while ($fila = $result->fetch_assoc()) {
                $this->rows[] = array_map('utf8_encode', $fila);
            }
            $result->close();
            $this->cerrar_conexion();
            //array_pop($this->rows);
        } catch (Exception $e) {
            echo "Error! : " . $e->getMessage();
            return false;
        }
    }

    # Desconectar la base de datos

    private function cerrar_conexion() {
        $this->conexion->close();
    }

}
?>