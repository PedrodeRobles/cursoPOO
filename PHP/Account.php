<?php

class Account {
    public $id;
    public $document;
    public $name;
    public $password;
    public $email;

    public function __construct($name, $document) {
        $this->name = $name;
        $this->document = $document;
    }

    public function printDataAccount(){
        echo "Name: $this->name, Document: $this->document, email: $this->email";
    }
}