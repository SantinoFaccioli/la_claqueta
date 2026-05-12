<?php
session_start();
require_once 'controllers/peliculasController.php';
require_once 'controllers/CategoriaController.php';
require_once 'controllers/adminController.php';

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

        case 'login' :

                $controller = new adminController();
                $controller->FormularioLogin();

        break;
        
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

        case 'logout':

            $controller = new CategoriaController();
            $controller->logout();

            break; 

        default: 

            echo "404 Page Not Found";

            break;
    }    

    
