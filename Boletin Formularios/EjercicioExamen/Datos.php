<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de tu formulario</title>
    <style>
        * {
            margin: 5px;
        }
    </style>



</head>

<body>
    <h1>Datos recogidos:</h1>
    <br>
    <div id="datosSuscriptor">
        <h3>Datos del suscriptor</h3>
        <?php
        $isChecked = true;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
                echo "<span>El campo nombre es obligatorio</span>";
                $isChecked = false;
            } else {
                $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            if (!isset($_POST['apellido1']) || empty($_POST['apellido1'])) {
                echo "<span>El campo apellido es obligatorio</span>";
                $isChecked = false;
            } else {
                $apellido1 = filter_var($_POST['apellido1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            if (!isset($_POST['apellido2']) || empty($_POST['apellido2'])) {
                echo "<span>El campo apellido 2 es obligatorio</span>";
                $isChecked = false;
            } else {
                $apellido2 = filter_var($_POST['apellido2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
            if (!isset($_POST['correo']) || empty($_POST['correo'])) {
                echo "<span>El campo correo es obligatorio</span>";
                $isChecked = false;
            } else {
                if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
                    echo "<span>El formato del correo es incorrecto</span>";
                    $isChecked = false;
                } else {
                    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
                }
            }
            if (!isset($_POST['interes']) || empty($_POST['interes'])){
                echo "<span>El campo interes es obligatorio</span>";
                $isChecked = false;
            } else {
                $interes = "TODO";//TODO
            }
        }


        ?>

    </div>


    <div id="datosSuscripcion">
        <h3>Datos de la suscripcion</h3>
        
        

    </div>
</body>

</html>