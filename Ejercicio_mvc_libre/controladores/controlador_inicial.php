<?php

require_once '../modelo_clase/modelo.php';

$player = new Player();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $player->setPlayer(
        $_POST['name'],
        $_POST['age'],
        $_POST['nationality'],
        $_POST['experience'],
        $_POST['teams'],
        $_POST['allstar'],
        $_POST['mvp'],
        $_POST['image']
    );
}

$result = $player->getPlayer();

require_once '../vistas/vista.php';
