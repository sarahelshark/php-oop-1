# OOP MOVIE

Concetti di classe, variabili e metodi d'istanza che abbiamo visto, create un file index.php in cui:
1) è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza (ok)
  => all'interno della classe è definito un costruttore (ok)
  => all'interno della classe è definito almeno un metodo(ok setCast)
2) vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
3) Modificare la classe Movie in modo che accetti piú di un genere.
4) Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
==> Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

5) Aggiungiamo nella classe Movie:
-una proprietá statica che richiamiamo staticamente
-un metodo 'normale' nel quale usiamo la proprietá statica
-un metodo statico che chiamiamo staticamente