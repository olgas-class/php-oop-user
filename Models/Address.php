<?php

/**
 * class Address
 * defines Address class
 * @author Olga Demina
 */
class Address {
    public $via;
    public $numero;
    public $citta;
    public $cap;
    public $stato;

    public static $defaultCitta = "Roma";


    /**
     * @param String $via il nome della via
     * @param Integer $numero numero civico
     * @param String $citta nome della città
     * @param String $cap numero cap
     * @param String $stato nome dello stato, di default Italia
     */
    function __construct(String $via, Int $numero, String $citta, String $cap, String $stato = "Italia") {
        $this->via = $via;
        $this->numero = $numero;
        $this->citta = $citta;
        $this->cap = $cap;
        $this->stato = $stato;
    }

    public function print() {
        return "$this->via $this->numero, $this->cap, $this->citta, $this->stato";
    }

    public function defaultCitta() {
        return self::$defaultCitta;
    }
}
