<?php
require_once 'model/dbConnect.php';

class AdminModel extends dbConnect {

    public function getNombreUsuario($nombre_usuario){

        $query =$this->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario	 = ?');
        $query -> execute([$nombre_usuario]);
        $usuario = $query->fetch(PDO::FETCH_OBJ);

        return $usuario;

    }

}