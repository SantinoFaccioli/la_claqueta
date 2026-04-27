<?php
require_once 'controllers/ProductoController.php';

$action = 'home'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

    $params = explode('/', $action);


    switch ($params[0]){
        case 'home':

        break;
    }
