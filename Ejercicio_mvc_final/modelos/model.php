<?php
class Jugador {
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=localhost;dbname=mvc_lakers", "root", "");
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function setJugador($nombre, $edad, $titulos, $logo) {
        $sql = "INSERT INTO plantilla (nombre, edad, numero_titulos, logo) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $edad, $titulos, $logo]);
    }

    public function getJugadores() {
        $sql = "SELECT * FROM plantilla";
        return $this->conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getJugadorById($id) {
        $sql = "SELECT * FROM plantilla WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarJugador($id, $nombre, $edad, $titulos, $logo) {
        $sql = "UPDATE plantilla SET nombre=?, edad=?, numero_titulos=?, logo=? WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $edad, $titulos, $logo, $id]);
    }

    public function borrarJugador($id) {
        $sql = "DELETE FROM plantilla WHERE id=?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$id]);
    }
}
