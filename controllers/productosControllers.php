<?php

class PeliculaController {

    public function showHome() {
        echo "<h1>Listado de Películas - La Claqueta</h1>";
        echo "<p> controlador va a pedirle al modelo las películas y se las va a pasar a la vista.</p>";
    }

    public function showPelicula() {
        echo "<h1>Detalle de la Película</h1>";
        echo "<p>sinopsis, el año y el género.</p>";
    }

    public function showAdminPanel() {
        echo "<h1>Panel de Administración</h1>";
        echo "<p> botones para borrar y editar.</p>";
    }
}