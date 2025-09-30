<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion del formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php

    function formato($dato)
    {
        $dato = trim($dato);
        $dato = htmlspecialchars($dato);
        $dato = stripslashes($dato);
        return $dato;
    }

    $isChecked = true;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (!isset($_POST['nombre']) || empty($_SERVER['nombre'])) {
            echo "<span style=\"color:red;\">El campo nombre es obligatorio</span><br>";
            $isChecked = false;
        } else {
            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['apellidos']) || empty($_SERVER['apellidos'])) {
            echo "<span style=\"color:red;\">El campo apellidos es obligatorio</span><br>";
            $isChecked = false;
        } else {
            $nombre = filter_var($_POST['apellidos'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (!isset($_POST['email']) || empty($_SERVER['email'])) {
            echo "<span style=\"color:red;\">El campo email no puede estar vacio</span><br>";
            $isChecked = false;
        } else {
            $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<span style=\"color:red;\">El campo email no es valido</span><br>";
                $isChecked = false;
            }
        }
        if (!isset($_POST['estudios']) || empty($_POST['estudios'])) {
            echo "<span style=\"color:red;\">El campo estudios es obligatorio</span><br>";
            $isChecked = false;
        } else {
            $estudios = filter_var($_POST['estudios'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if (!isset($_POST['estado']) || empty($_POST['estado'])) {
            echo "<span style=\"color:red;\">El campo estado es obligatorio</span><br>";
            $isChecked = false;
        } else {
            $estudios = filter_var($_POST['estado'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if (!isset($_POST['genero']) || empty($_POST['genero'])) {
            echo "<span style=\"color:red;\">El campo genero es obligatorio</span><br>";
            $isChecked = false;
        } else {
            $estudios = filter_var($_POST['genero'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
    }




    if (!$isChecked) {
    }
    ?>
</head>

<body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>