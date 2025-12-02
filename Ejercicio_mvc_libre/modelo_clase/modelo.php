<?php
class Player {
    private $player;
    private $db;
    public function __construct()
    {
        $this->player = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mvc_libre;charset=utf8', 'root', '');
    }

    public function setPlayer($name, $age, $nationality, $experience, $teams, $allstar, $mvp, $image){
        $sql = "INSERT INTO  plantilla_lakers (player_name, player_age, player_nationality, player_experience, player_teams, player_allstar, player_mvp, player_image) VALUES ('$name', $age, '$nationality', $experience, $teams, $allstar, $mvp, '$image') ";
        $result = $this->db->query($sql); //hacemos consulta, guardamos en result, cerramos conexion.
        $this->db = null;
        return $result;
    }

    public function getPlayer(){
        $sql = "SELECT * FROM plantilla_lakers";
        $result=$this->db->query($sql);
        $this->player = $result->fetchAll(PDO::FETCH_ASSOC);
        $this->db = null;
        return $this->player;
    }

}
