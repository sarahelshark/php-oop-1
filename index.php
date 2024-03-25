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
    
    public function __construct($title,$overview,$cast,$duration)
    {
     //select an object property inside a class using the $this variable
     $this -> title = $title;
     $this -> overview = $overview;
     $this
    
    }
}

// Create an instance of a class (an object) with the `new` keyword 1
$padrino = new Movie('Il Padrino', 'Il padrino lorem ipsum dolo',  [ ] , 120 ) ;

//write values to each propeerty of the object 2 > 
//con il __contruct , li passo qui sopra new Movie(dentro qui )
//$padrino->title = 'il padrino';
//$padrino->overview = 'lorem ipsumo dolor';
//$padrino->duration = '120';

var_dump($padrino);


//create a second instance
$matrix = new Movie;

$matrix->title = 'The Matrix';
$matrix->overview = 'lorem ipsumfvfo dolor';
$matrix->duration = '60';

var_dump($matrix);

//create a third instance
$avatar = new Movie;

$avatar->title = 'Avatar';
$avatar->overview = 'lorem ipsumfvfo dolor';
$avatar->duration = '250';

var_dump($avatar);


//construct= "magic method" !!  faccio tutte le assegnazioni dentro la classe con funzione:
//  __construct() funzione speciale direttamente all'interno della mia classe, funzione normale che all'interno si aspetta dei parametri o ARGOMENTI che devo passare dentro -->l'argomento sara' passato quando andro' a chiamare la funzione new CLASSE(argomento...)

?>