<?php

class ApiModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getAll() {
        try {
            $query = $this->db::connect()->query("SELECT codeid, firstname, lastname FROM students");

            return $query;
            
        } catch (PDOException $e) {
            return [];
        }

    }

    function getById(string $codeId) : Student {
        $student = new Student();

        try {
            $query = $this->db::connect()->prepare("SELECT codeid, firstname, lastname FROM students WHERE codeid = :codeId");
            
            $param['codeId'] = $codeId;
            $query->execute($param);
            $row = $query->fetch(); //solo vendra un solo valor
            $student->codeId = $row['codeid'];
            $student->firstName = $row['firstname'];
            $student->lastName = $row['lastname'];

            return $student;

        } catch (PDOException $e) {
            return null;
        }

    }

    function update(Array $item) : bool {
        try {
            $query = $this->db::connect()->prepare("UPDATE students SET firstname = :firstName, lastname = :lastName WHERE codeid = :codeId");
            
            $param['codeId'] = $item['codeId'];
            $param['firstName'] = $item['firstName'];
            $param['lastName'] = $item['lastName'];
            $query->execute($param);
            
            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    function delete(string $codeId) : bool {
        try {
            $query = $this->db::connect()->prepare("DELETE FROM students WHERE codeid = :codeId");
            
            $param['codeId'] = $codeId;
            $query->execute($param);
            
            return true;

        } catch (PDOException $e) {
            return false;
        }

    }
}