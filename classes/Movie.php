<?php
class Movie {
    private $titolo;
    private $regista;
    private $genere;
    private $protagonista;

    public function __construct($_titolo,$_regista,$_protagonista){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->protagonista = $_protagonista;
    }
    public function setGenere($_genere){
        $this->genere = $_genere;
    }
    public function getGenere(){
        return $this->genere;
    }
}