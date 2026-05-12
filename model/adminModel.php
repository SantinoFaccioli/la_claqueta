<?php
require_once 'model/dbConnect.php';

class AdminModel extends dbConnect {

    public function getUsuarioEmail($email){

        $query-> $this ->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query -> execute([$email]);
        $usuario = $query->(PDO::FETCH_OBJ);

    }

}