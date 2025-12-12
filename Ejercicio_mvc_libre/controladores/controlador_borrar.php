<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once '../modelo_clase/modelo.php';

    $player = new Player();
    $flag = $player->deletePlayer($_GET['id']);

    if ($flag) {
        echo "The player was correctly Deleted";
        echo "<br><a href= ../index.php>Return to Start</a>";
    } else {
        echo "There's no player with that id";
        echo "<br><a href= ../index.php>Return to Start</a>";
    }
}
?>
