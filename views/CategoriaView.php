<?php

class CategoriaView {

    /**
     * Muestra el listado público de categorías (lo que ve cualquier usuario).
     */
    public function showCategorias($categorias) {
        require_once 'views/templates/layout/header.phtml';
        require 'views/templates/listadoCategorias.phtml';
        require_once 'views/templates/layout/footer.phtml';
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