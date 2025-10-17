<?php

class Bebida{
    private $id;
    private $cantidadLitros;
    private $precio;
    private $marca;

    public function __construct($id, $cantidadLitros, $precio, $marca)
    {
        $this->id = $id;
        $this->cantidadLitros = $cantidadLitros;
        $this->precio = $precio;
        $this->marca = $marca;
    }

    public function getId(){
        return $this -> id;
    }
    public function getCantidadLitros(){
        return $this -> cantidadLitros;
    }
    public function getPrecio(){
        return $this -> precio;
    }
    public function getMarca(){
        return $this -> marca;
    }

    public function setId($id){
        $this -> id = $id;
    }
    public function setCantidadLitros($cantidadLitros){
        $this -> cantidadLitros = $cantidadLitros;
    }
    public function setPrecio($precio){
        $this -> precio = $precio;
    }
    public function setMarca($marca){
        $this -> marca = $marca;
    }
    
}