<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de equipos</title>
    <style>
        body {
            font-family: 'Montserrat', 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #552583, #1d1160);
            margin: 0;
            padding: 30px;
            color: #fff;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            color: #FDB927;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        table {
            width: 95%;
            margin: auto;
            border-collapse: collapse;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
            border: 2px solid #FDB927;
        }

        th,
        td {
            padding: 14px;
            text-align: center;
        }

        th {
            background: linear-gradient(135deg, #FDB927, #c99700);
            color: #1d1160;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
        }

        tr {
            transition: background 0.3s ease;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        tr:hover {
            background-color: rgba(253, 185, 39, 0.15);
        }

        img {
            border-radius: 8px;
            border: 2px solid #FDB927;
            background-color: #1d1160;
            padding: 3px;
        }

        a {
            text-decoration: none;
            padding: 7px 14px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 0.5px;
            margin: 0 4px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        a[href*="Editar"] {
            background: linear-gradient(135deg, #FDB927, #c99700);
            color: #1d1160;
        }

        a[href*="Editar"]:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(253, 185, 39, 0.6);
        }

        .delete {
            background: linear-gradient(135deg, #c0392b, #8e1b10);
            color: #fff;
        }

        .delete:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(192, 57, 43, 0.6);
        }

        .back-btn {
            display: block;
            width: 220px;
            margin: 40px auto 0;
            text-align: center;
            padding: 12px;
            border-radius: 30px;
            border: 2px solid #FDB927;
            color: #FDB927;
            font-weight: bold;
            letter-spacing: 1px;
            background: transparent;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: #FDB927;
            color: #1d1160;
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(253, 185, 39, 0.6);
        }
    </style>

</head>

<body>
    <h1>Listado de Jugadores</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Títulos</th>
            <th>Logo</th>
            <th>Acciones</th>
        </tr>
        <?php if ($jugadores): ?>
            <?php foreach ($jugadores as $e): ?>
                <tr>
                    <td><?= $e['id'] ?></td>
                    <td><?= $e['nombre'] ?></td>
                    <td><?= $e['edad'] ?></td>
                    <td><?= $e['numero_titulos'] ?></td>
                    <td><img src="../img/<?= $e['logo'] ?>" width="50"></td>
                    <td>
                        <a href="controladorEditar.php?id=<?= $e['id'] ?>">Editar</a>
                        <a class="delete" href="controladorBorrar.php?id=<?= $e['id'] ?>">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay Jugadores</td>
            </tr>
        <?php endif; ?>
    </table>

    <a href="../index.php" class="back-btn">Volver al formulario</a>
</body>

</html>