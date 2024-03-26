<?php
//importo la classe che ho spostato dentro Models
require_once __DIR__ . '/app/Models/Movie.php';

//importo tutti i miei dati inizializzati
require_once __DIR__ . '/database/db.php';

//DIFF METODO E FUNZIONE ?
//il metodo è una funzione definita dentro una classe, che può essere richiamata da un oggetto 

// Create an instance of a class (an object) with the `new` keyword 1
//$padrino = new Movie('Il Padrino', 'Il padrino lorem ipsum dolo',  [ ] , 120 ) ;

/*
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
]); */
//write values to each propeerty of the object 2 > 
//con il __contruct , li passo qui sopra new Movie(dentro qui )
//$padrino->title = 'il padrino';
//$padrino->overview = 'lorem ipsumo dolor';
//$padrino->duration = '120';
//var_dump($padrino);
//create a second instance
//writes values to each property of the object (or if they exist already, updates the existing values)
//$matrix = new Movie('Matrix', 'Matrix lor lorem ipsum dolo',  [ 
   // "Keanu Reeves",
    //"Laurence Fishburne",
    //"Carrie-Anne Moss",
    //"Hugo Weaving",
    //"Joe Pantoliano",
    //"Gloria Foster",
   // "Marcus Chong",
   // "Julian Arahanga",
    //"Matt Doran",
    //"Belinda McClory",
    //"Anthony Ray Parker",
    //"Paul Goddard",

//] , 60 ) ;

//$matrix -> setCast(['Fabio','Pinco', 'PancO']);
//Aggiungo persone nel cast con setCast 

//$matrix->title = 'The Matrix';
//$matrix->overview = 'lorem ipsumfvfo dolor';
//$matrix->duration = '60';

//var_dump($matrix);

//create a third instance
/*
$avatar = new Movie('Avatar', 'Avatar lor lorem ipsum dolo',  [
    "Lorem ipsumo",
    "dolor sit",
    "amet et",
    "volummptat est",
    "Pinco Pallino",
 ] , 180 ) ;
 */
//$avatar->title = 'Avatar';
//$avatar->overview = 'lorem ipsumfvfo dolor';
//$avatar->duration = '250';
//var_dump($avatar);

//$movies = [ $matrix, $padrino , $avatar];

//construct= "magic method" !!  faccio tutte le assegnazioni dentro la classe con funzione:
//  __construct() funzione speciale direttamente all'interno della mia classe, funzione normale che all'interno si aspetta dei parametri o ARGOMENTI che devo passare dentro -->l'argomento sara' passato quando andro' a chiamare la funzione new CLASSE(argomento...)


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Movie exercise</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header class="bg-dark text-white">
           <nav
            class="nav justify-content-center  "
           >
            <a class="nav-link active" href="#" aria-current="page"
                >Active link</a
            >
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            
           </nav>
           
        </header>
        <main class="mt-5">
            <section>
                 <div class="container">
                     <div class="row row-cols-1 row-cols-sm-3 g-3"><!-- col automatiche-->
                     <?php foreach ($movies as $movie) : ?>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <img
                                        src="https://picsum.photos/200/300"
                                        class="img-fluid img'thumbnail rounded-top"
                                        alt="random img"
                                    />
                                    
                                    <h3><?= $movie->title ?> </h3>
                                    <p><?= $movie->overview ?> </p>
                                </div>
                            </div>
                        </div>
                     <?php endforeach; ?>
                       
                     </div>
                 </div>
            </section>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
