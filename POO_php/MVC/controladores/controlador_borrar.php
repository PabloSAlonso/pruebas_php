<?php
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        require_once '../modelos/modelo.php';

        $empleado = new Empleado();
        $flag = $empleado -> borrarEmpleado($_GET['id']);

        if ($flag){
            echo "Empleado Borrado Correctamente";
        } else {
            echo "No se ha encontrado un empleado con ese id";
        }   
    }
?>