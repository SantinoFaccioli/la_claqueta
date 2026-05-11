<?php
 require_once 'config.php';
 require_once 'dbConnect.php';

  class peliculasModel extends DbConnect{
    
    public function traerTodos(){
        $query = $this->db->prepare('
        SELECT p.*, c.nombre AS nombre_categoria 
        FROM pelicula p 
        INNER JOIN categoria c ON p.id_categoria = c.id_categoria
        ');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    public function traerPelicula($peli_id){
       try {
         $query = $this->db->prepare(' SELECT p.*, c.nombre AS nombre_categoria FROM pelicula p INNER JOIN categoria c ON p.id_categoria = c.id_categoria WHERE p.id_pelicula = ?');
         $query->bindParam('?', $peli_id, PDO::PARAM_INT);
         $query -> execute([$peli_id]);
         $rta = $query -> fetch(PDO::FETCH_OBJ);

            return $rta ?: null;
       } catch (PDOException $e) {
        error_log($e);
        return null;
       } 
    }
 }