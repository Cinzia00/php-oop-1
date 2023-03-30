<?php

class Movie {
    public $titolo;
    public $genere;
    public $durata;
    public $lingua;
    public $annoDiUscita;

   

    
    function __construct($titolo, $genere) {
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    
    public function calcolaAnniUscita() {
        $annoCorrente = date('Y');
        $anni = $annoCorrente - $this->annoDiUscita;
        return $anni;
    }
   

    
}