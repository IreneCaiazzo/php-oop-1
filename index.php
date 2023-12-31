<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

<?php

class Movie
{
    //variabili d'istanza
    public string $title;
    public string $director;
    public int $year;
    public string $protagonist;

    //costruttore
    public function __construct(string $title, string $director, int $year, string $protagonist)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->protagonist = $protagonist;
    }

    //method
    public function showMovie()
    {
        return $this->title . ' ' . $this->director . ' ' . $this->year . ' ' . $this->protagonist;
    }
}

$seven_pounds = new Movie(
    "Seven Pounds",
    "Gabriele Muccino",
    "2008",
    "Will Smith"
);

$zodiac = new Movie(
    "Zodiac",
    "David Fincher",
    "2007",
    "Jake Gyllenhaal",
);

$leon = new Movie(
    "Léon",
    "Luc Besson",
    "1994",
    "Natalie Portman",
);

//mostra contenuto in pagina

echo $seven_pounds->showMovie() . "<br>";
echo $zodiac->showMovie() . "<br>";
echo $leon->showMovie() . "<br>";
