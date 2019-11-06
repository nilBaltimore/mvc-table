<?php

class AddModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function insert($data) {

        try {
            $query = $this->db::connect()->prepare("INSERT INTO students (codeid, firstname, lastname) VALUES (:codeid, :firstname, :lastname)");
            $query->execute([
                'codeid' => $data['codeid'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname']
                ]);
            return true;

        } catch (PDOException $e) {
            //echo $e->getMessage();
            return false;
        }
        
        

        
    }

}