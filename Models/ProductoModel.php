<?php

require_once 'Core/modeloAbstractoDB.php';

class Producto extends ModeloAbstractoDB {

    private $id;
    private $nombre;
    private $fecha;
    private $stock;
    private $stock_maximo;
    private $imagen;
    private $descripcion;
    private $categoria;
    private $precio_venta;
    private $acceuser;

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getStock_maximo() {
        return $this->stock_maximo;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getPrecio_venta() {
        return $this->precio_venta;
    }

    public function getAcceuser() {
        return $this->acceuser;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function setStock_maximo($stock_maximo) {
        $this->stock_maximo = $stock_maximo;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setPrecio_venta($precio_venta) {
        $this->precio_venta = $precio_venta;
    }

    public function setAcceuser($acceuser) {
        $this->acceuser = $acceuser;
    }

    public function getAll() {
        
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
