<?php
require_once "../modelos/model.php";

$modelo = new Jugador();
$jugadores = $modelo->getJugadores();

require_once "../vistas/vista.php";
