<?php
require_once 'model/dbConnect.php';

class CategoriaModel extends dbConnect {

    public function getAll() {
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function get($id) {
        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function insert($nombre, $descripcion, $imagen) {
        $query = $this->db->prepare("INSERT INTO categoria (nombre, descripcion, imagen) VALUES (?, ?, ?)");
        $query->execute([$nombre, $descripcion, $imagen]);
    }

    public function delete($id) {
        $query = $this->db->prepare("DELETE FROM categoria WHERE id_categoria = ?");
        $query->execute([$id]);
    }

    public function update($id, $nombre, $descripcion, $imagen) {
        $query = $this->db->prepare("UPDATE categoria SET nombre = ?, descripcion = ?, imagen = ? WHERE id_categoria = ?");
        $query->execute([$nombre, $descripcion, $imagen, $id]);
    }
}
