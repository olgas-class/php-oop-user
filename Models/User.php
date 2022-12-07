<?php

require_once __DIR__ . "/Address.php";

/**
 * class User
 * defines User class
 * @author Olga Demina
 */
class User {
    public $nome;
    public $email;
    // public $eta;
    public $indirizzo;
    private $sconto = 0;


    function __construct($nome, Address $indirizzo = null, $email = "") {
        $this->nome = $nome;
        $this->indirizzo = $indirizzo;
        $this->email = $email;
    }

    public function getSconto() {
        return $this->sconto;
    }

    public function setSconto($eta) {
        if ($eta > 65) {
            $this->sconto = 40;
        }
    }

    public function printUserInfo() {
        return "Nome: $this->nome; Email: $this->email";
    }

    public static function sayHello() {
        echo "Ciao";
    }
}
