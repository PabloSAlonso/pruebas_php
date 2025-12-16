<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar equipo</title>
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
            margin-top: 40px;
            color: #FDB927;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        form {
            background: rgba(0, 0, 0, 0.8);
            width: 420px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            border: 2px solid #FDB927;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 18px 0;
            border: none;
            border-radius: 8px;
            background-color: #2a1b3d;
            color: #fff;
            font-size: 14px;
            outline: none;
            box-sizing: border-box;
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

        a {
            display: block;
            text-align: center;
            margin: 25px auto;
            width: 200px;
            text-decoration: none;
            color: #FDB927;
            border: 2px solid #FDB927;
            padding: 10px;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #FDB927;
            color: #1d1160;
        }
    </style>



</head>

<body>
    <h1>Editar Jugador</h1>
    <form action="../controladores/controladorActualizar.php" method="post">
        <input type="hidden" name="id" value="<?= $jugador['id'] ?>">
        <input type="text" name="nombre" value="<?= $jugador['nombre'] ?>" required>
        <input type="number" name="edad" value="<?= $jugador['edad'] ?>" required>
        <input type="number" name="titulos" value="<?= $jugador['numero_titulos'] ?>" required>
        <input type="text" name="logo" value="<?= $jugador['logo'] ?>" required>
        <button type="submit">Actualizar</button>
    </form>

    <a href="controlador.php">Volver al listado</a>
</body>

</html>