<?php

class Main extends Controller {
    function __construct() {
        parent::__construct();
        //echo "<p>Controller Main</p>";
    }

    function render() {
        $this->view->render('main/index');
    }

    function saludar() {
        echo "<p>Hello Nil</p>";
    }
}