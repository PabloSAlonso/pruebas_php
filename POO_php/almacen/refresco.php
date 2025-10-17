<?php

require_once "bebida.php";

class Refresco extends Bebida{
    private $azucar;
    private $promocion;

    public function __construct($id, $litros, $precio, $marca, $azucar, $promocion)
    {
        parent :: __construct($id, $litros, $precio, $marca);
        $this -> azucar = $azucar;
        $this -> promocion =  $promocion;
    }
}