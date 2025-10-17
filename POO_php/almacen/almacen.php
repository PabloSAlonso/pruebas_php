<?php

interface Almacen{
    public function calcularPrecioTodos($matriz);

    public function calcularPrecioFila($matriz);

    public function calcularPrecioEstanteria($matriz);

    public function agregarProducto($matriz);

    public function eliminarProducto($matriz);

    public function mostrarInfo($matriz);
}