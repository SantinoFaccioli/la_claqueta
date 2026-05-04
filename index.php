<?php

require_once 'controllers/peliculasController.php';
require_once 'controllers/CategoriaController.php';

$action = 'peliculas'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

    $params = explode('/', $action);


    switch ($params[0]){
        case 'peliculas':
            $controller = new peliculasController;
            $controller -> mostrarTodas();

        break;

        case 'pelicula':
            
            $peli_id = $params[1];
            
           $controller = new peliculasController;
           $controller -> mostrarPelicula($peli_id);

        break;    

        case 'categorias':
             $controller = new CategoriaController(); 
             $controller->showCategorias();

        break;

        
    /*

            **ESTO ESTA BIEN PERO ANTES TENEMOS QUE HACER QUE SOLO SE PUEDA ACCEDER SI ESTA LOGUEADO **

        case 'actualizar-categoria':
        $controller = new CategoriaController();
        $controller->updateCategoria();
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
        */    
        default: 

            echo "404 Page Not Found";

            break;
    }    

    
