<?php

require_once "controllers/error.php";

class App {
    function __construct() {
        //echo "<p>App</p>";

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);


        //cuando se ingresa sin definir un controlador
        //main sera el controlador por defecto
        if (empty($url[0])) {
            $fileController = "controllers/main.php";
            require_once $fileController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        } 
        
        //cuando existe un controlador definido
        $fileController = "controllers/" . $url[0] . ".php";

        if (file_exists($fileController)) {
            require_once $fileController;

            //inicializa el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //numero de elemento del arreglo
            $urlSize = sizeof($url);

            
            
            if($urlSize > 1) {
                // si es mayor a 2 hay parametros
                if($urlSize > 2) {
                    $params = [];
                    for ($i=2; $i < $urlSize; $i++) { 
                        array_push($params, $url[$i]);
                    }
                    //se llama al controlador/accion con parametros
                    $controller->{$url[1]}($params);
                } else {
                    //se llama al controlador/accion sin parametros
                    $controller->{$url[1]}();
                }
            } else {
                //cuando solo viene el controlador sin accion
                $controller->render();
            }

        } else {
            $controller = new AppError();
        }

    }
}