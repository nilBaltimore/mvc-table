<?php

class Database {
   

    private static $pdo = null;

    
    function __construct() {

    }

    //metodo statico para gestionar la misma 
    //conexion si ya esta creada
    static function connect() {
        if(is_null(self::$pdo)) {
            $host = constant('HOST');
            $port = constant('PORT');
            $db = constant('DB');
            $user = constant('USER');
            $password = constant('PASSWORD');
            $charset = constant('CHARSET');

            try {
                $connection = "mysql:host=$host;port=$port;dbname=$db;charset=$charset;";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                self::$pdo = new PDO($connection, $user, $password, $options);
                
            } catch(PDOException $e) {
                print_r("Error connection: " . $e->getMessage());
                self::$pdo = null;
            }
        }
        return self::$pdo;
    }
}

/*
class Database {

    private $host;
    private $port;
    private $db;
    private $user;
    private $password;
    private $charset;

    function __construct() {
        $this->host = constant('HOST');
        $this->port = constant('PORT');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function connect() {
        try {
            $connection = "mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=$this->charset;";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        } catch(PDOException $e) {
            print_r("Error connection: " . $e->getMessage());
        }
    }
}
*/