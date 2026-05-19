<?php
require_once 'views/AdminViews.php';
require_once 'model/adminModel.php';

class adminController{
    private $views;
    private $model;

    public function __construct() {
        $this->views = new AdminViews();
        $this->model = new AdminModel();
    }

    function FormularioLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->verificarUsuario();
            return; 
        }
        
        $this->views->mostrarFormularioLogin();
        }

    function verificarUsuario(){
        
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            
            $user = $_POST['user'];
            $password = $_POST['password'];

            $usuario = $this->model->getNombreUsuario($user);

            if($usuario && password_verify($password,$usuario->contrasenia )){
                
                session_start();

                $_SESSION['USER_ID'] = $usuario->id;
                $_SESSION['USER_EMAIL'] = $usuario->email;
                $_SESSION['USER_NAME'] = $usuario->nombre;

                header("Location: " . BASE_URL ); 
                exit;  
            }else{
                $this->views->mostrarFormularioLogin("Usuario o contraseña incorrectos");
            }
        }

    }

    public function logout() {

        session_destroy();

         header("Location: " . BASE_URL);
    }

    private function estaLogueado() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        
        if (isset($_SESSION['USER_ID'])) {
            return true;
        } else {
            return false;
        }
    }


    

}