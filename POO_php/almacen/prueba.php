<?php
require_once "AguaMineral.php";
require_once "BebidaAzucarada.php";
require_once "Almacen.php";

$almacen = new Almacen(2, 3);

$agua1 = new Agua(1, 1.5, 1.00, "Font Vella", "Manantial del Pirineo");
$agua2 = new Agua(2, 2.0, 1.50, "Lanjarón", "Sierra Nevada");

$cola = new Refresco(3, 1.5, 2.00, "Coca-Cola", 12, true);
$fanta = new Refresco(4, 2.0, 2.20, "Fanta", 10, false);
$colaZero = new Refresco(5, 1.5, 2.00, "Coca-Cola", 0, false);

$almacen->agregarProducto($agua1);
$almacen->agregarProducto($agua2);
$almacen->agregarProducto($cola);
$almacen->agregarProducto($fanta);
$almacen->agregarProducto($colaZero);

$almacen->mostrarInformacion();

echo "<hr><b>Precio total del almacén:</b> " . $almacen->calcularPrecioTotal() . " €<br>";
echo "<b>Precio total de Coca-Cola:</b> " . $almacen->calcularPrecioMarca("Coca-Cola") . " €<br>";
echo "<b>Precio total de estantería 0:</b> " . $almacen->calcularPrecioEstanteria(0) . " €<br>";

$almacen->eliminarProducto(3);

echo "<hr><b>📊 Después de eliminar la Coca-Cola:</b><br>";
$almacen->mostrarInformacion();
?>
