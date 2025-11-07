<?php
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        require_once '../modelos/modelo.php';

        $empleado = new Empleado();
        
    }
?>