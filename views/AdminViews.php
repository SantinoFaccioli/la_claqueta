<?php

class AdminViews {

    public function mostrarFormularioLogin($error = null){
        require_once 'views/templates/layout/header.phtml';
        require_once 'views/templates/plantillaLogin.phtml';
        require_once 'views/templates/layout/footer.phtml';
    }

}