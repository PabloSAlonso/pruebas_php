<?php
if (isset($_POST['player_name']) && $_POST['player_name'] != "" && (isset($_POST['player_age'])) && ($_POST['player_age'] != '') && isset($_POST['player_nationality']) && ($_POST['player_nationality'] != '') && isset($_POST['player_experience']) && ($_POST['player_experience'] != '') && isset($_POST['player_teams']) && ($_POST['player_teams'] != '') && isset($_POST['player_allstar']) && ($_POST['player_allstar'] != '') && isset($_POST['player_mvp']) && ($_POST['player_mvp'] != '')) {
    require_once '../modelo_clase/modelo.php';
    $player = new Player();
    $result = $player->updatePlayer($_POST['player_name'], $_POST['player_age'], $_POST['player_nationality'], $_POST['player_experience'], $_POST['player_teams'], $_POST['player_allstar'], $_POST['player_mvp'], $_POST['player_image']);
    if ($result) {
        echo "<p style=\"color:green;\">The player has been updated correctly</p>";
    } else {
        echo "<p style=\"color:green;\">The player hasn't been updated correctly</p>";
    }
    echo "<br> <a href=../index.php>Return to Start</a>";
}
if (move_uploaded_file($_FILES['player_image']['tmp_name'], $ruta)) {
    $player = new Player();
    $ruta_final = str_replace("../", "", $ruta);
    $result = $player->updatePlayer($_POST['player_name'], $_POST['player_age'], $_POST['player_nationality'], $_POST['player_experience'], $_POST['player_teams'], $_POST['player_allstar'], $_POST['player_mvp'], $_POST['player_image']);
    if ($result) {
        echo "<p style=\"color:green;\">The player has been updated correctly</p>";
    } else {
        echo "<p style=\"color:green;\">The player hasn't been updated correctly</p>";
    }
    echo "<br> <a href=../index.php>Return to Start</a>";
}
