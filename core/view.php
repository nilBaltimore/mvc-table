<?php

class View {
    function __construct(){
        //echo "<p>View base</p>";
    }

    function render($name) {
        require 'views/' . $name . '.php';
    }
}