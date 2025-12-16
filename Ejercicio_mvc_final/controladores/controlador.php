<?php
require_once "../modelos/model.php";

$modelo = new Jugador();
$equipos = $modelo->getJugadores();

require_once "../vistas/vista.php";
