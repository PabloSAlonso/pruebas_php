<?php

require_once "bebida.php";

class Agua extends Bebida{
    private $origen;

    public function __construct($id, $litros, $precio, $marca, $origen)
    {
        parent :: __construct($id, $litros, $precio, $marca);
        $this -> origen = $origen;
    }
    
}