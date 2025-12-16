<?php
class Player
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;dbname=mvc_libre;charset=utf8',
            'root',
            ''
        );
    }

    public function getPlayer()
    {
        $sql = "SELECT * FROM plantilla_lakers";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setPlayer($name, $age, $nationality, $experience, $teams, $allstar, $mvp, $image)
    {
        $sql = "INSERT INTO plantilla_lakers 
        (player_name, player_age, player_nationality, player_experience, player_teams, player_allstar, player_mvp, player_image)
        VALUES 
        (:name, :age, :nation, :exp, :teams, :allstar, :mvp, :image)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':age' => $age,
            ':nation' => $nationality,
            ':exp' => $experience,
            ':teams' => $teams,
            ':allstar' => $allstar,
            ':mvp' => $mvp,
            ':image' => $image
        ]);
    }

    public function editPlayer($id)
    {
        $sql = "SELECT * FROM plantilla_lakers WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePlayer($name, $age, $nation, $teams, $allstar, $mvp, $image, $id)
    {
        $sql = "UPDATE plantilla_lakers SET
            player_name = :name,
            player_age = :age,
            player_nationality = :nation,
            player_teams = :teams,
            player_allstar = :allstar,
            player_mvp = :mvp,
            player_image = :image
            WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':age' => $age,
            ':nation' => $nation,
            ':teams' => $teams,
            ':allstar' => $allstar,
            ':mvp' => $mvp,
            ':image' => $image,
            ':id' => $id
        ]);
    }

    public function deletePlayer($id)
    {
        $sql = "DELETE FROM plantilla_lakers WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
