<?php

    class peliculasView {

        function verTodas($peliculas){
            require_once 'views/templates/layout/header.phtml';

            require_once 'views/templates/listadoPeliculas.phtml';

            require_once 'views/templates/layout/footer.phtml';
        }

        function verPelicula($pelicula){
            require_once 'views/templates/layout/header.phtml';

            require_once 'views/templates/plantillaPelicula.phtml';
            
            require_once 'views/templates/layout/footer.phtml';
        }
    }