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
     $this -> cast = $cast;
     $this -> duration = $duration;
     
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

//DIFF METODO E FUNZIONE ?
//il metodo è una funzione definita dentro una classe, che può essere richiamata da un oggetto 

// Create an instance of a class (an object) with the `new` keyword 1
$padrino = new Movie('Il Padrino', 'Il padrino lorem ipsum dolo',  [ ] , 120 ) ;

$padrino -> setCast([
    "Marlon Brando",
    "Al Pacino",
    "James Caan",
    "Robert Duval",
    "Diane Keaton",
    "Richard S.Castellano",
    "Abe Vigoda",
    "Sterling Hayden",
    "John Marley",
    "Richard Conte",
    "Al Lettieri",
    "Gianni Russo",
    "Talia Shire",
]);
//write values to each propeerty of the object 2 > 
//con il __contruct , li passo qui sopra new Movie(dentro qui )
//$padrino->title = 'il padrino';
//$padrino->overview = 'lorem ipsumo dolor';
//$padrino->duration = '120';
//var_dump($padrino);
//create a second instance
//writes values to each property of the object (or if they exist already, updates the existing values)
$matrix = new Movie('Matrix', 'Matrix lor lorem ipsum dolo',  [ 
    "Keanu Reeves",
    "Laurence Fishburne",
    "Carrie-Anne Moss",
    "Hugo Weaving",
    "Joe Pantoliano",
    "Gloria Foster",
    "Marcus Chong",
    "Julian Arahanga",
    "Matt Doran",
    "Belinda McClory",
    "Anthony Ray Parker",
    "Paul Goddard",

] , 60 ) ;

//$matrix->title = 'The Matrix';
//$matrix->overview = 'lorem ipsumfvfo dolor';
//$matrix->duration = '60';

//var_dump($matrix);

//create a third instance
$avatar = new Movie('Avatar', 'Avatar lor lorem ipsum dolo',  [
    "Lorem ipsumo",
    "dolor sit",
    "amet et",
    "volummptat est",
    "Pinco Pallino",
 ] , 180 ) ;

//$avatar->title = 'Avatar';
//$avatar->overview = 'lorem ipsumfvfo dolor';
//$avatar->duration = '250';
//var_dump($avatar);


//construct= "magic method" !!  faccio tutte le assegnazioni dentro la classe con funzione:
//  __construct() funzione speciale direttamente all'interno della mia classe, funzione normale che all'interno si aspetta dei parametri o ARGOMENTI che devo passare dentro -->l'argomento sara' passato quando andro' a chiamare la funzione new CLASSE(argomento...)

?>