<?php
require_once 'model/CategoriaModel.php';
require_once 'views/CategoriaView.php';

class CategoriaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoriaModel();
        $this->view = new CategoriaView();
    }

    public function showCategorias() {
        $categorias = $this->model->getAll();
        $this->view->showCategorias($categorias);
    }

    public function showAdminPanel() {
        $categorias = $this->model->getAll();
        $this->view->showAdminPanel($categorias);
    }

    public function addCategoria() {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion']; 
        $imagen = $_POST['imagen']; 

        if (!empty($nombre) && !empty($descripcion)) {
            $this->model->insert($nombre, $descripcion, $imagen);
            header("Location: " . BASE_URL . "admin-categorias");
        } else {
            echo "Faltan datos obligatorios";
        }
    }

    public function deleteCategoria($id) {
        $this->model->delete($id);
        header("Location: " . BASE_URL . "admin-categorias");
    }

    public function editCategoria($id) {
        $categoria = $this->model->get($id); 
        if ($categoria) {
            $this->view->showEditForm($categoria);
        } else {
            echo "La categoría no existe";
        }
    }

    public function updateCategoria() {
        $id = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion']; 
        $imagen = $_POST['imagen']; 

        if (!empty($id) && !empty($nombre) && !empty($descripcion)) {
            $this->model->update($id, $nombre, $descripcion, $imagen);
            header("Location: " . BASE_URL . "admin-categorias");
        } else {
            echo "Faltan datos para actualizar";
        }
    }
}
