<?php
require_once "../modelos/model.php";

$modelo = new Jugador();
$jugador = $modelo->getJugadorById($_GET['id']);

require_once "../vistas/vista_editar.php";
