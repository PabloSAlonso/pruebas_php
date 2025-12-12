<?php
class Player
{
    private $player;
    private $db;
    public function __construct()
    {
        $this->player = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mvc_libre;charset=utf8', 'root', '');
    }

    public function setPlayer($name, $age, $nationality, $experience, $teams, $allstar, $mvp, $image)
    {
        $sql = "INSERT INTO  plantilla_lakers (player_name, player_age, player_nationality, player_experience, player_teams, player_allstar, player_mvp, player_image) VALUES ('$name', $age, '$nationality', $experience, $teams, $allstar, $mvp, '$image') ";
        $result = $this->db->query($sql); //hacemos consulta, guardamos en result, cerramos conexion.
        $this->db = null;
        return $result;
    }

    public function getPlayer()
    {
        $sql = "SELECT * FROM plantilla_lakers";
        $result = $this->db->query($sql);
        $this->player = $result->fetchAll(PDO::FETCH_ASSOC);
        $this->db = null;
        return $this->player;
    }

    public function editPlayer($id) {
        $sql = "SELECT player_name, player_age, player_nationality, player_teams, player_allstar, player_mvp, player_image FROM plantilla_lakers WHERE id=$id";
    }

    public function updatePlayer($name, $age, $nation, $teams, $allstar, $mvp, $image, $id) {
        $sql = "UPDATE plantilla_lakers SET player_name = '$name', player_age = $age, player_nationality = '$nation', player_teams = $teams, player_allstar = $allstar, player_mvp = $mvp, player_image = '$image' WHERE id = $id";
    }

    public function deletePlayer($id) {
        $sql = "DELETE FROM plantilla_lakers WHERE id = $id";
    }
}
