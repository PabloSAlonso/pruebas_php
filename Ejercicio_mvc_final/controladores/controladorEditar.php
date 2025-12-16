<?php
require_once "../modelos/model.php";

$modelo = new Jugador();
$equipo = $modelo->getJugadorById($_GET['id']);

require_once "../vistas/vista_editar.php";
