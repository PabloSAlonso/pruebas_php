<?php

interface Almacen{
    public function calcularPrecioTodos();

    public function calcularPrecioFila();

    public function calcularPrecioEstanteria();

    public function agregarProducto();

    public function eliminarProducto();

    public function mostrarInfo();
}