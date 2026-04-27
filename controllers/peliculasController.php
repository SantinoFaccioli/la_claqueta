<?php

    require_once 'model/peliculasModel.php';
    require_once 'views/peliculasView.php';

    class peliculasController {

        private $model;
        private $view;

        public function __construct() {
            $this->model = new peliculasModel;
            $this->view = new peliculasView;
        }

        function mostrarTodas(){
            $peliculas = $this-> model ->traerTodos();
            $this->view->verTodas($peliculas);

        }

    }

