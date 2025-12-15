<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing Players</title>
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
        <input type="submit" name="actualizar" id="actualizar" value="Actualizar">
        <br>
    </form>
</body>

</html>