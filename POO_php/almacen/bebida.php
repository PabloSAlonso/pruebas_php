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
    
}