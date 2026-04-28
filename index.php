<?php

require_once 'controllers/peliculasController.php';
require_once 'controllers/CategoriaController.php';

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

        case 'categorias':
             $controller = new CategoriaController(); 
             $controller->showCategorias();

        break;

        case 'admin-categorias':

             $controller = new CategoriaController();
             $controller->showAdminPanel();

        break;

        case 'insertar-categoria':

            $controller = new CategoriaController();
            $controller->addCategoria();

            break;

        case 'eliminar-categoria':

            $controller = new CategoriaController();
            $controller->deleteCategoria($params[1]);

            break;

        case 'editar-categoria':

            $controller = new CategoriaController();
            $controller->editCategoria($params[1]);

            break;
            
        default: 

            echo "404 Page Not Found";

            break;
    }    

    
