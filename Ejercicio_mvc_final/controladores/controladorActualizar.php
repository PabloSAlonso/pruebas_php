<?php
require_once "../modelos/model.php";

$modelo = new Jugador();
$modelo->actualizarJugador(
    $_POST['id'],
    $_POST['nombre'],
    $_POST['edad'],
    $_POST['titulos'],
    $_POST['logo']
);

header("Location: controlador.php");
