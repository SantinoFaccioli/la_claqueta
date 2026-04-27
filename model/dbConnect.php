<?php
class DbConnect {

    protected $db;

    public function __construct() {
        
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';

        try {
    
            $this->db = new PDO($dsn, DB_USER, DB_PASS);
            
            
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Error de conexión a la Base de Datos: " . $e->getMessage());
        }
    }
}