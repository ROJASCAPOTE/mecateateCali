<?php

class Usuario {

//DENTIFICACION	
//PRIMENOMBRE	
//SEGNOMBRE	
//PRIAPELLIDO	
//SEGAPELLIDO	
//TELEFONO	
//CELULAR	
//DIRECCION	
//BARRIO	
//FECHA_NACIMIENTO	
//SEXO	LOGIN	
//PASSWORD	
//EMAIL
//ROL_ID	
//DEPARTAMENTOS_ID	
//MUNICIPIOS_ID	
//ID_SEDE	
//CREATE_DATA	
//LAST_UPDATE	
//FOTO	
//ESTADO
    private $cedula;
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $telefono;
    private $celular;
    private $direccion;
    private $fechaNacimiento;
    private $sexo;
    private $email;
    private $cargo;
    private $departamentos;
    private $municipios;
    private $barrio;
    private $login;
    private $password;
    private $fechaIngreso;
    private $sede;
    private $foto;
    private $estado;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
        $this->estado = true;
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

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCargo() {
        return $this->cargo;
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
        return $this->password;
    }

    public function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    public function getSede() {
        return $this->sede;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setCedula($cedula): void {
        $this->cedula = $cedula;
    }

    public function setPrimerNombre($primerNombre): void {
        $this->primerNombre = $this->db->real_escape_string($primerNombre);
    }

    public function setSegundoNombre($segundoNombre): void {
        $this->segundoNombre = $this->db->real_escape_string($segundoNombre);
    }

    public function setPrimerApellido($primerApellido): void {
        $this->primerApellido = $this->db->real_escape_string($primerApellido);
    }

    public function setSegundoApellido($segundoApellido): void {
        $this->segundoApellido = $this->db->real_escape_string($segundoApellido);
    }

    public function setTelefono($telefono): void {
        $this->telefono = $this->db->real_escape_string($telefono);
    }

    public function setCelular($celular): void {
        $this->celular = $this->db->real_escape_string($celular);
    }

    public function setDireccion($direccion): void {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    public function setFechaNacimiento($fechaNacimiento): void {
        $this->fechaNacimiento = $this->db->real_escape_string($fechaNacimiento);
    }

    public function setSexo($sexo): void {
        $this->sexo = $this->db->real_escape_string($sexo);
    }

    public function setEmail($email): void {
        $this->email = $this->db->real_escape_string($email);
    }

    public function setCargo($cargo): void {
        $this->cargo = $this->db->real_escape_string($cargo);
    }

    public function setDepartamentos($departamentos): void {
        $this->departamentos = $this->db->real_escape_string($departamentos);
    }

    public function setMunicipios($municipios): void {
        $this->municipios = $this->db->real_escape_string($municipios);
    }

    public function setBarrio($barrio): void {
        $this->barrio = $barrio;
    }

    public function setLogin($login): void {
        $this->login = $this->db->real_escape_string($login);
    }

    public function setPassword($password): void {
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function setFechaIngreso($fechaIngreso): void {
        $this->fechaIngreso = $this->db->real_escape_string($fechaIngreso);
    }

    public function setSede($sede): void {
        $this->sede = $this->db->real_escape_string($sede);
    }

    public function setFoto($foto): void {
        $this->foto = $this->db->real_escape_string($foto);
    }

    public function setEstado($estado): void {
        $this->estado = $this->db->real_escape_string($estado);
    }

    public function save() {
        if (isset($_POST)) {
            echo $date;
            $sql = "INSERT INTO usuarios VALUES('{$this->getCedula()}', '{$this->getPrimerNombre()}', "
                    . "'{$this->getSegundoNombre()}', '{$this->getPrimerApellido()}', '{$this->getSegundoApellido()}', "
                    . "'{$this->getTelefono()}', '{$this->getCelular()}', '{$this->getDireccion()}', '{$this->getBarrio()}',"
                    . "'{$this->getFechaNacimiento()}', '{$this->getSexo()}', '{$this->getLogin()}', '{$this->getPassword()}',"
                    . "'{$this->getEmail()}', {$this->getCargo()}, {$this->getDepartamentos()}, {$this->getMunicipios()},"
                    . "{$this->getSede()},'{$this->getFechaIngreso()}',' ', null, '{$this->getEstado()}');";

            echo $sql;
            $save = $this->db->query($sql);
            $result = false;
            if ($save) {
                $result = true;
            }
        }
        return $result;
    }

    public function login($login, $password) {
        //comprobar si existe el usuario
        $sql = "SELECT cedula, password FROM usuarios";
        $login = $this->db->query($sql);
    }

}

?>