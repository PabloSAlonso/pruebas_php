<?php

    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        require_once '../modelo_clase/modelo.php';

        $player = new Player();
        $dato = $player -> editPlayer($_GET['id']);

        require_once '../vistas/vista_editar.php';
    }