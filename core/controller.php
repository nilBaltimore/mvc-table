<?php

class Controller {
    function __construct(){
        //echo "<p>Controller base</p>";
        $this->view = new View();
    }

    // en esta clase del Core se crea ya una instancia al modelo 
    // concreto asociado al controlador que se esta llamando
    // el cual arrastra la conexion a la base de datosd
    function loadModel($model) {
        $url = "models/$model" . "Model.php";
        //echo "dentro de loadModel -> $url";

        if (file_exists($url)) {
            require $url;
            $modelName = $model . "Model";
            $this->model = new $modelName();
        }

    }

}