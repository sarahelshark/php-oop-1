<?php
// Class Declaration  questo e' il MODELLO a cui fanno riferimento tutti i new Movies, che comunque restano autonomi
/**
 * Class Movie
 */
class Movie
{//proprieta' o variabili d'istanza solo dichiarate, mancano i valori a queste variabili, operatore assegnazione alle classi -> 1-2
    public $title; 
    public $overview;
    public $cast;
    public $duration;
    public $genres; //potrei dichiararle internamente al construct con public di fronte a loro, cancellanto questi  qui
    
    public function __construct($title,$overview,$cast,$duration, array $genres)
    {
     //select an object property inside a class using the $this variable
     $this -> title = $title;
     $this -> overview = $overview;
     $this -> cast = $cast;
     $this -> duration = $duration;
     $this ->genres = $genres;
     
    }

    public function setCast($cast)
    {
        $this->cast = $cast;
    }
    public function getCast()
    {
        //in quanto getter, prende info da oggetto richiamato, non richiede param
        return $this -> cast;
    }
}

?>