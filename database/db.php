<?php
//importo la classe che ho spostato dentro Models
require_once __DIR__ . '/../app/Models/Movie.php';

$movies = 
[
    new Movie('Il Padrino', 'Il padrino lorem ipsum dolo',  [
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
    ] , 
    120 , 
    [
        new Genre('molto drammatico', 'molto-drammatico'),
        new Genre('molto mafioso', 'molto-mafioso'),
    ]) , 

    new Movie('Matrix', 'Matrix lor lorem ipsum dolo',  [ 
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
    
    ] ,
     60 ) ,

    new Movie('Avatar', 'Avatar lor lorem ipsum dolo',  [
        "Lorem ipsumo",
        "dolor sit",
        "amet et",
        "volummptat est",
        "Pinco Pallino",
     ] , 
     180)
];

?>