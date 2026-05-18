<?php
require_once 'model/dbConnect.php';

class AdminModel extends dbConnect {

    public function getUsuarioEmail($nombre_usuario){

        $query-> $this ->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario= ?');
        $query -> execute([$nombre_usuario]);
        $usuario = $query-> (PDO::FETCH_OBJ);

    }

}