<?php

class CategoriaView {

    public function showAdminPanel($categorias) {
        echo '<h1>Administración de Categorías</h1>';

        // FORMULARIO PARA AGREGAR
        echo '
        <form action="insertar-categoria" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="descripcion" placeholder="Descripción" required>
            <input type="text" name="imagen" placeholder="URL de la imagen">
            <button type="submit">Agregar</button>
        </form>
        ';

        // TABLA PARA VER, EDITAR Y BORRAR
        echo '<table border="1">';
        echo '<thead><tr><th>Nombre</th><th>Descripción</th><th>Imagen</th><th>Acciones</th></tr></thead>';
        echo '<tbody>';
        foreach ($categorias as $cat) {
            echo "<tr>
                    <td>{$cat->nombre}</td>
                    <td>{$cat->descripcion}</td>
                    <td><img src='{$cat->imagen}' width='100'></td>
                    <td>
                        <a href='eliminar-categoria/{$cat->id_categoria}'>Eliminar</a> | 
                        <a href='editar-categoria/{$cat->id_categoria}'>Editar</a>
                    </td>
                  </tr>";
        }
        echo '</tbody></table>';
    }

   
    public function showEditForm($categoria) {
        echo '
        <h2>Editar Categoría: ' . $categoria->nombre . '</h2>
        <form action="' . BASE_URL . 'actualizar-categoria" method="POST">
            <input type="hidden" name="id_categoria" value="' . $categoria->id_categoria . '">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="' . $categoria->nombre . '" required>
            <label>Descripción:</label>
            <input type="text" name="descripcion" value="' . $categoria->descripcion . '" required>
            <label>URL Imagen:</label>
            <input type="text" name="imagen" value="' . $categoria->imagen . '">
            <button type="submit">Guardar Cambios</button>
        </form>
        <a href="' . BASE_URL . 'admin-categorias">Cancelar</a>
        ';
    }

    public function showCategorias($categorias) {
        foreach ($categorias as $cat) {
            echo "<div>
                    <h3>{$cat->nombre}</h3>
                    <img src='{$cat->imagen}' width='200'>
                  </div>";
        }
    }
}