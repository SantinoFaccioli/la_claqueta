<?php
require_once 'controllers/peliculasController.php';

$action = 'home'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

    $params = explode('/', $action);


    switch ($params[0]){
        case 'home':
            $controller = new peliculasController;
            $controller -> mostrarTodas();
        break;
    }
