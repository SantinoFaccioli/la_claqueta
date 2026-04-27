<?php
require_once 'app/controllers/ProductosController.php';

$action = 'home'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$controller = new PeliculaController();

if ($action == 'home') {
    $controller->showHome();
} 
elseif ($action == 'ver') {
    $controller->showPelicula();
} 
elseif ($action == 'admin') {
    $controller->showAdminPanel();
} 
else {
    echo "Error 404: La página '" . $action . "' no existe en La Claqueta.";
}