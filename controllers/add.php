<?php

class Add extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->message = null;
    }

    function render() {
        $this->view->render('add/index');
    }

    function register() {
        $codeid = $_POST['codeid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $message = null;

        $registerData = Array(
            'codeid' => $codeid,
            'firstname' => $firstname,
            'lastname' => $lastname
        );

        if($this->model->insert($registerData)) {
            $message =  "<p>Alumno $codeid insertado</p>";
        } else {
            $message =  "<p>Hubo un error al crear $codeid</p>";
        }

        $this->view->message = $message;
        $this->render();

 
    }

}