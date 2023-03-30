<?php

class movies {
    public $titoloOriginale;
    public $titolo;
    public $genere;
    public $durata;
    public $lingua;
    public $annoDiUscita;

    var_dump($movies)
   

    
    function __construct($titolo, $genere) {
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    
    public function calcolaAnniUscita() {
        $annoCorrente = date('Y');
        $annoCorrente - $this->annoDiUscita;
        var_dump($annoCorrente);
    }
   

    
}