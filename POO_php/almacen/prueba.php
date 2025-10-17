<?php
// is_object($var); devuelve true si es un objeto
// get_class($var); devuelve la clase de la variable
// if($var instance_of(objeto_comparar)) Devuelve true si la variable tiene alguna instancia del objeto a comparar

class Prueba implements Almacen {
    private $matriz = [4][4];

    public function calcularPrecioTodos($matriz){
        $acu = 0;
        for ($i = 0; $i < ob_get_length($matriz); $i++){
            // if (instanceof($matriz[$i]) == )
            // $acu += getPrecio($matriz[$i]);
        }
    }

    public function calcularPrecioFila($matriz){

    }

    public function calcularPrecioEstanteria($matriz){

    }

    public function agregarProducto($matriz){

    }

    public function eliminarProducto($matriz){

    }

    public function mostrarInfo($matriz){

    }
}
