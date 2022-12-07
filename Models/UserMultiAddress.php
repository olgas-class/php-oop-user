<?php

require_once __DIR__ . "/Address.php";

/**
 * class User
 * defines User class
 * @author Olga Demina
 */
class UserMultiAddress {
    public $nome;
    public $email;
    public $indirizzi;


    /**
     * @param string $nome
     * @param array $indirizzi
     * @param string $email
     */
    function __construct(string $nome, array $indirizzi, string $email = "") {
        $this->nome = $nome;
        $this->indirizzi = $indirizzi;
        $this->email = $email;
    }


    public function printUserInfo() {
        return "Nome: $this->nome; Email: $this->email";
    }
}
