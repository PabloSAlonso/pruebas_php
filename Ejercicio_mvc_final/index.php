<?php
require_once "modelos/model.php";

if (
    isset($_POST['nombre'], $_POST['edad'], $_POST['titulos'], $_FILES['logo']) &&
    $_POST['nombre'] != '' && $_POST['edad'] != '' && $_POST['titulos'] != '' &&
    $_FILES['logo']['name'] != ''
) {
    $directorio = "img/";
    $nombre_logo = basename($_FILES['logo']['name']);
    $ruta_final = $directorio . $nombre_logo;

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $ruta_final)) {
        $jugador = new Jugador();
        $jugador->setJugador($_POST['nombre'], $_POST['edad'], $_POST['titulos'], $nombre_logo);
        $mensaje = "<p class='success'>El Jugador se ha añadido correctamente</p>";
    } else {
        $mensaje = "<p class='error'>Error al subir la imagen</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario inscripción equipo</title>
    <style>
        body {
            font-family: 'Montserrat', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #552583, #1d1160);
            margin: 0;
            padding: 0;
            color: #fff;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            color: #FDB927;
            margin-top: 40px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        form {
            background: rgba(0, 0, 0, 0.75);
            width: 420px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            border: 2px solid #FDB927;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 18px 0;
            border: none;
            border-radius: 8px;
            background-color: #2a1b3d;
            color: #fff;
            font-size: 14px;
            box-sizing: border-box;
            outline: none;
        }

        input::placeholder {
            color: #cbb7e2;
        }

        input[type="file"] {
            background-color: #1d1160;
            cursor: pointer;
        }

        button {
            background: linear-gradient(135deg, #FDB927, #c99700);
            color: #1d1160;
            padding: 14px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(253, 185, 39, 0.6);
        }

        .success {
            color: #FDB927;
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }

        .error {
            color: #ff4d4d;
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }

        .listar-btn {
            margin-bottom: 40px;
        }

        .listar-btn button {
            background: transparent;
            color: #FDB927;
            border: 2px solid #FDB927;
        }

        .listar-btn button:hover {
            background-color: #FDB927;
            color: #1d1160;
        }
    </style>

</head>

<body>
    <h1>Formulario Inserción Jugador</h1>

    <?php if (isset($mensaje)) echo $mensaje; ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Nombre del Jugador" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <input type="number" name="titulos" placeholder="Número de títulos" required>
        <input type="file" name="logo" required>
        <button type="submit">Crear jugador</button>
    </form>

    <form action="controladores/controlador.php" method="get" class="listar-btn">
        <button type="submit">Listar jugadores</button>
    </form>
</body>

</html>