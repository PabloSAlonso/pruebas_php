<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing Players</title>
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
            margin-top: 25px;
            color: #FDB927;
            font-size: 2.2rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 3px 3px 0 #552583;
        }

        .form-container {
            width: 90%;
            max-width: 500px;
            background: #1a1a1a;
            margin: 30px auto;
            padding: 25px;
            border-radius: 12px;
            border: 2px solid #552583;
            box-shadow: 0 0 15px rgba(85, 37, 131, 0.6);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #FDB927;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            background: #111;
            border: 2px solid #552583;
            border-radius: 6px;
            color: #fff;
            transition: 0.25s;
        }

        input:focus {
            outline: none;
            border-color: #FDB927;
            box-shadow: 0 0 8px rgba(253, 185, 39, 0.6);
        }

        img {
            display: block;
            margin: 15px auto;
            width: 90px;
            border-radius: 8px;
            border: 2px solid #552583;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background: #552583;
            border: 2px solid #FDB927;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.25s ease;
            letter-spacing: 1px;
        }

        input[type="submit"]:hover {
            background: #FDB927;
            color: #000;
            border-color: #552583;
            box-shadow: 0 0 10px rgba(253, 185, 39, 0.7);
        }
    </style>
</head>

<body>
    <h1>Insert the new Stats</h1>

    <form action="../controladores/controlador_actualizar.php" method="post">
        <input type="text" name="player_name" id="player_name" value="<?php echo $dato[0]['player_name'] ?>">
        <br>
        <input type="number" name="player_age" id="player_age" value="<?php echo $dato[0]['player_age'] ?>">
        <br>
        <input type="text" name="player_nationality" id="player_nationality" value="<?php echo $dato[0]['player_nationality'] ?>">
        <br>
        <input type="number" name="player_experience" id="player_experience" value="<?php echo $dato[0]['player_experience'] ?>">
        <br>
        <input type="number" name="player_teams" id="player_teams" value="<?php echo $dato[0]['player_teams'] ?>">
        <br>
        <input type="number" name="player_allstar" id="player_allstar" value="<?php echo $dato[0]['player_allstar'] ?>">
        <br>
        <input type="number" name="player_mvp" id="player_mvp" value="<?php echo $dato[0]['player_mvp'] ?>">
        <br>
        <input type="file" name="player_image" id="player_image">
        <br>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <br>
        <img src="../<?php echo "$result[$i]['imagen']" ?>" alt="foto" style="width: 90px;height:auto;">
        <br>
        <input type="submit" name="actualizar" id="actualizar" value="Update">
        <br>
    </form>
</body>

</html>