<?php

    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        require_once '../modelos/modelo.php';
        require_once '../vistas/vista_editar.php';

        $empleado = new Empleado();
        
        
    }

?>