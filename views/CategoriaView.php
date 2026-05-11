<?php

class CategoriaView {

    /**
     * Muestra el listado público de categorías (lo que ve cualquier usuario).
     */
    public function showCategorias($categorias) {
        // No hace falta poner el header y footer acá si ya los pusiste 
        // adentro del archivo listadoCategorias.phtml
        require 'views/templates/listadoCategorias.phtml';
    }

    /**
     * Muestra el panel de administración (donde se puede agregar, borrar y ver la tabla).
     */
    public function showAdminPanel($categorias) {
        require 'views/templates/administracionCategorias.phtml';
    }

    /**
     * Muestra el formulario para editar una categoría específica.
     */
    public function showEditForm($categoria) {
        require 'views/templates/formEditarCategoria.phtml';
    }
}