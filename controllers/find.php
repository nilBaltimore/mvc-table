<?php

class Find extends Controller {
    function __construct() {
        parent::__construct();
        $this->view->data = null;
        $this->view->student = null;
    }

    function render() {
        $students = $this->model->getAll();
        $this->view->data = $students;
        $this->view->render('find/index');
    }

    //le llega un array porque asi hemos decidido gestionar 
    //lo que viene despues de la accion en core/app.php
    function showStudent(Array $params = null) {
        $codeId = $params[0];
        $student = $this->model->getById($codeId);

        session_start();
        $_SESSION['codeId'] = $student->codeId;

        $this->view->student = $student;
        $this->view->message = null;
        $this->view->render('find/show');
    }

    function editStudent() {
        session_start();
        $codeId = $_SESSION['codeId'];
        $firstNameNew = $_POST['firstname'];
        $lastNameNew = $_POST['lastname'];
        unset($_SESSION['codeId']);

        $param = Array(
            'codeId' => $codeId,
            'firstName' => $firstNameNew,
            'lastName' => $lastNameNew,
        );

        if($this->model->update($param)) {
            $student = new Student($codeId, $firstNameNew, $lastNameNew);
            $this->view->student = $student;
            $this->view->message = "Alumno actualizado con exito";
        } else {
            $this->view->message = "No se puedo actualizar!!";
        }

        $this->view->render('find/show');

    }

    //le llega un array porque asi hemos decidido gestionar 
    //lo que viene despues de la accion en core/app.php
    function deleteStudent(Array $params = null) {
        $codeId = $params[0];
    
        if($this->model->delete($codeId)) {
            //$this->view->message = "Alumno $codeId borrado con exito";
            $message = "Alumno $codeId borrado con exito";;
        } else {
            //$this->view->message = "No se puedo borrar $codeId !!";
            $message = "No se puedo borrar $codeId !!";
        }

        //$this->render();

        echo $message;
  
        
    }

}