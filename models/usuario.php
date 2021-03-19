<?php

class Usuario {

    private $cedula;
    private $primerNombre;
    private $degundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $login;
    private $password;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getCedula() {
        return $this->$this->cedula;
    }

    public function getPrimerNombre() {
        return $this->$this->primerNombre;
    }

    public function getDegundoNombre() {
        return $this->$this->degundoNombre;
    }

    public function getPrimerApellido() {
        return $this->$this->primerApellido;
    }

    public function getSegundoApellido() {
        return $this->$this->segundoApellido;
    }

    public function getLogin() {
        return $this->$this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setCedula($cedula) {
        $this->cedula = $this->db->real_escape_string($cedula);
    }

    public function setPrimerNombre($primerNombre) {
        $this->primerNombre = $this->db->real_escape_string($primerNombre);
    }

    public function setDegundoNombre($degundoNombre) {
        $this->degundoNombre = $this->db->real_escape_string($degundoNombre);
    }

    public function setPrimerApellido($primerApellido) {
        $this->primerApellido = $this->db->real_escape_string($primerApellido);
    }

    public function setLogin($login) {
        $this->login = $this->db->real_escape_string($login);
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function save() {
        $sql = "INSERT INTO usuarios VALUES('{$this->getCedula()}', '{$this->getPrimerNombre()}');";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

}

?>