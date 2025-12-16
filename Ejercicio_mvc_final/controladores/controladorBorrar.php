<?php
require_once "../modelos/model.php";

$modelo = new Jugador();
$modelo->borrarJugador($_GET['id']);

header("Location: controlador.php");
