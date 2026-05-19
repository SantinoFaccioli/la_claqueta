<?php
require_once 'model/dbConnect.php';

class AdminModel extends dbConnect {

<<<<<<< HEAD
    public function getNombreUsuario($nombre_usuario){

        $query =$this->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario	 = ?');
        $query -> execute([$nombre_usuario]);
        $usuario = $query->fetch(PDO::FETCH_OBJ);

        return $usuario;
=======
    public function getUsuarioEmail($nombre_usuario){

        $query-> $this ->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario= ?');
        $query -> execute([$nombre_usuario]);
        $usuario = $query-> (PDO::FETCH_OBJ);
>>>>>>> 66789049723561539599a3dc69bc621fc659211a

    }

}