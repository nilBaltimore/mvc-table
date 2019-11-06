<?php

class Student {
    public $codeId;
    public $firstName;
    public $lastName;

    function __construct($codeId = null, $firstName = null, $lastName = null) {  
        $this->codeId = $codeId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}