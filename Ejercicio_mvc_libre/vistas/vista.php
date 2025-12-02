<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Principal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
            background: #0d0d0d;
            color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #FDB927;
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 3px 3px 0 #552583;
        }

        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background: #1a1a1a;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(85, 37, 131, 0.7);
        }

        th {
            background: #552583;
            color: #FDB927;
            padding: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #552583;
            text-align: center;
        }

        tr:hover td {
            background: #2b2b2b;
            color: #FDB927;
        }

        img {
            width: 80px;
            height: auto;
            border-radius: 6px;
            border: 2px solid #552583;
        }

        a {
            color: #FDB927;
            font-weight: bold;
            text-decoration: none;
            border: 2px solid #FDB927;
            padding: 6px 10px;
            border-radius: 6px;
            background: #552583;
            transition: 0.25s ease;
        }

        a:hover {
            background: #FDB927;
            color: #000;
            border-color: #552583;
            box-shadow: 0 0 10px rgba(253, 185, 39, 0.6);
        }

        .return {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 10px 18px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <h1>Listado </h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>Experience Years</th>
            <th>Nº Teams Played</th>
            <th>All Star Game</th>
            <th>MVP</th>
            <th>Player Image</th>
        </tr>
        <?php
            for($i=0;$i<count($result);$i++){
        ?>
        <tr>
            <td><?php echo $result[$i]['player_name'] ?></td>
            <td><?php echo $result[$i]['player_age'] ?></td>
            <td><?php echo $result[$i]['player_nationality'] ?></td>
            <td><?php echo $result[$i]['player_experience'] ?></td>
            <td><?php echo $result[$i]['player_teams'] ?></td>
            <td><?php echo $result[$i]['player_allstar'] ?></td>
            <td><?php echo $result[$i]['player_mvp'] ?></td>
            <td><img src="../<?php echo $result[$i]['player_image'] ?>" alt="foto" style="width:auto;height:auto;"></td>
            <td><?php echo "<a href=\"../controladores/controlador_editar.php?id={$result[$i]['id']}\">Actualizar</a>"?></td>
            <td><?php echo "<a href=\"../controladores/controlador_borrar.php?id={$result[$i]['id']}\">Borrar</a>"?></td>                
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="../index.php">Return to the Principal Page</a>

</body>
</html>