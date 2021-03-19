<?php

class Conectar {

    private $driver;
    private $host;
    private $user;
    private $pass;
    private $database;
    private $charset;

    public function __construct() {
        
    }

    function getDriver() {
        return $this->driver;
    }

    function getHost() {
        return $this->host;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function getDatabase() {
        return $this->database;
    }

    function getCharset() {
        return $this->charset;
    }

    function setDriver($driver) {
        $this->driver = $driver;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setDatabase($database) {
        $this->database = $database;
    }

    function setCharset($charset) {
        $this->charset = $charset;
    }

}
?>

