<?php

require_once 'modeloAbstractoDB.php';

class Usuario extends ModeloAbstractoDB {

    private $cedula;
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $fechaNacimiento;
    private $telefono;
    private $celular;
    private $direccion;
    private $genero;
    private $email;
    private $rol;
    private $departamentos;
    private $municipios;
    private $barrio;
    private $login;
    private $password;
    private $foto;
    private $estado;
    private $lastUpdate;

    public function __construct() {
        
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getPrimerNombre() {
        return $this->primerNombre;
    }

    public function getSegundoNombre() {
        return $this->segundoNombre;
    }

    public function getPrimerApellido() {
        return $this->primerApellido;
    }

    public function getSegundoApellido() {
        return $this->segundoApellido;
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

    public function getGenero() {
        return $this->genero;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getDepartamentos() {
        return $this->departamentos;
    }

    public function getMunicipios() {
        return $this->municipios;
    }

    public function getBarrio() {
        return $this->barrio;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->$this->password;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setPrimerNombre($primerNombre) {
        $this->primerNombre = $primerNombre;
    }

    public function setSegundoNombre($segundoNombre) {
        $this->segundoNombre = $segundoNombre;
    }

    public function setPrimerApellido($primerApellido) {
        $this->primerApellido = $this->$primerApellido;
    }

    public function setSegundoApellido($segundoApellido) {
        $this->segundoApellido = $this->$segundoApellido;
    }

    public function setTelefono($telefono) {
        $this->telefono = $this->$telefono;
    }

    public function setCelular($celular) {
        $this->celular = $this->$celular;
    }

    public function setDireccion($direccion) {
        $this->direccion = $this->$direccion;
    }

    public function setGenero($genero) {
        $this->genero = $this->$genero;
    }

    public function setEmail($email) {
        $this->email = $this->$email;
    }

    public function setRol($rol) {
        $this->rol = $this->$rol;
    }

    public function setDepartamentos($departamentos) {
        $this->departamentos = $this->$departamentos;
    }

    public function setMunicipios($municipios) {
        $this->municipios = $this->$municipios;
    }

    public function setBarrio($barrio) {
        $this->barrio = $barrio;
    }

    public function setLogin($login) {
        $this->login = $this->$login;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $this->$fechaNacimiento;
    }

    public function setFoto($foto) {
        $this->foto = $this->db->$foto;
    }

    public function setEstado($estado) {
        $this->estado = $this->$estado;
    }

//     try {
//            $this->abrir_conexion();
//            $result = $this->conexion->query($this->query)
//                    or die(mysqli_errno($this->conexion) . " : "
//                            . mysqli_error($this->conexion) . " | Query=" . $this->query);
//
//            while ($fila = $result->fetch_assoc()) {
//                $this->rows[] = array_map('utf8_encode', $fila);
//            }
//            $result->close();
//            $this->cerrar_conexion();
//            //array_pop($this->rows);
//        } catch (Exception $e) {
//            echo "Error! : " . $e->getMessage();
//            return false;
//        }

    public function verificarUsuario($datos = array()) {
        $this->query = "SELECT * FROM usuario WHERE email ='" . $datos['user'] . "'";
        $this->obtener_resultados_query();
        return $this->rows;
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
