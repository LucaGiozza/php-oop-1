<!-- è definita una classe ‘Movie’ => all'interno della classe sono dichiarate delle variabili d'istanza =>
 all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php
// definisco una classe Movie
class Movie {
// dichiaro le variabili d'istanza
    public $titolo;
    public $autore_trama;
    public $genere;
    public $durata_film = 0;
    public $prezzo_biglietto;
    

// definisco un costruttore
    function __construct($_titolo, $_autore_trama, $_genere){

        $this->titolo = $_titolo;
        $this->autore_trama = $_autore_trama;
        $this->genere = $_genere;
        
    }
// primo metodo
    public function setMovie($_durata_film){
        $this->durata_film = $_durata_film;
    }

// secondo metodo

    public function getMovie(){
        return $this->durata_film;
    }

    public function calcoloPrezzo($prezzo_scontato){

        if($this->durata_film < 1.5){
            $this->prezzo_biglietto = $prezzo_scontato * 0.2;
        }

        return $this->prezzo_biglietto;
    }
}

$film = new Movie('Harry Potter', 'J.K.Rowling','Fantasy');

$film->setMovie(1.4);
var_dump($film);

$tempoFilm = $film->getMovie();
echo 'La durata del film è : ' . ' ' .  $tempoFilm . ' ' . 'ore';

$calcolo_prezzo = $film->calcoloPrezzo(20);
 var_dump($film);

$prezzo_finale = 20 - $calcolo_prezzo;
echo 'il prezzo totale(sconto compreso) è di :'. ' ' . $prezzo_finale . '$';