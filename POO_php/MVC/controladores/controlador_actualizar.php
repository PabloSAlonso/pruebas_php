<?php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once '../modelos/modelo.php';


    $empleado = new Empleado();
    $empleado->actualizarEmpleado($_GET['id']);

    require_once '../vistas/vista_editar.php';
    
    echo "Empleado actualizado correctamente";
    echo "<br><a href=../index.php>Volver</a>";
}
