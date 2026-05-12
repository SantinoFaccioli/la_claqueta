<?php
require_once 'views/AdminViews.php';

class adminController{
    private $views;




    public function __construct() {
        $this->views = new AdminViews();
    }

    function FormularioLogin() {
        $this->views->mostrarFormularioLogin();
    }

}