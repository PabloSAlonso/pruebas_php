<?php

if (isset($_POST['nombre']) && $_POST['nombre'] != "" && (isset($_POST['apellidos'])) && ($_POST['apellidos'] != '') && isset($_POST['telefono']) && ($_POST['telefono'] != '') && isset($_POST['departamento']) && ($_POST['departamento'] != '')) {
        //llamada al modelo
        require_once '../modelos/modelo.php';
        $empleado = new Empleado();
        $result = $empleado->actualizarEmpleado($_POST['id'], $_POST['nombre'], $_POST['apellidos'],$_POST['telefono'], $_POST['departamento']);
        if ($result) {
            echo "<p style=\"color:green;\">El usuario se ha actualizado correctamente</p>";
        } else {
            echo "<p style=\"color:red;\">El usuario no se ha actualizado</p>";
        }
        echo "<br> <a href=../index.php</a>";
    }
    // require_once '../modelos/modelo.php';


//     $empleado = new Empleado();
//     $empleado->actualizarEmpleado($_GET['id']);

//     require_once '../vistas/vista_editar.php';
    

// echo "Empleado actualizado correctamente";
// echo "<br><a href=../index.php>Volver</a>";
?>