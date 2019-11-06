<?php

class AppError extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->message = "Error al cargar el recurso!";
        $this->view->render('error/index');
        
        
    }
}