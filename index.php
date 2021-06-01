<?php
/***********************
    CREAZIONE MODELLO
    MOVIE CLASS
***********************/
class Movie {
    // Attributi
    public $title;
    public $genre;
    public $producer;
    public $cast;
    public $duration;
    public $exit_date;
    public $plot;

    /**
     * Constructor
    **/
    function __construct( $title, $genre, $producer, $cast, $duration, $exit_date) {
        $this->title = $title;
        $this->genre = $genre;
        $this->producer = $producer;
        $this->cast = $cast;
        $this->duration = $duration;
        $this->exit_date = $exit_date;
    }

    /**
     * Get excerpt for movie
    **/
    public function getExcerpt() {
        return substr($this->plot, 0, 200);
    }
}

// ISTANCE 1
$film_1 = new Movie('The Notebook', 'drammatico,sentimentale', 'Nick Cassavetes', 'Ryan Gosling e Rachel McAdams', '123 min', '2004');
$film_1->plot = 'In una casa di riposo dei nostri giorni, l\'anziano Duke legge a una paziente il diario di una storia d\'amore.... Nell\'estate del 1940, a Seabrook Island, Carolina del Sud, il giovane operaio Noah Calhoun e la diciassettenne Allison "Allie" Hamilton, ricca ereditiera, si incontrano per la prima volta al luna park.';
//var_dump($film_1);
echo "<h2> Titolo: $film_1->title</h2>";
echo "<h3> Genere: $film_1->genre</h3>";
echo "<h3> Regista: $film_1->producer</h3>";
echo "<h3> Cast: $film_1->cast</h3>";
echo "<div><strong> Durata: </strong> $film_1->duration</div>";
echo "<div><strong> Anno: </strong> $film_1->exit_date</div>";
echo '<p><strong> Trama: </strong>' . $film_1->getExcerpt() . '</p>';


// ISTANCE 2
$film_2 = new Movie('Pearl Harbor', 'guerra,storico', 'Michael Bay', 'Ben Affleck, Josh Hartnett, Kate Beckinsale', '183 min', '2001');
$film_2->plot = 'Rafe e Danny sono due grandi amici che sin da piccoli sognano di diventare piloti. Scoppia la seconda guerra mondiale e il sogno si avvera: vengono arruolati nell\'aviazione americana. All\'arruolamento Rafe, romantico ed espansivo, s\'innamora dell\'infermiera Evelyn.';
//var_dump($film_2);
echo "<h2> Titolo: $film_2->title</h2>";
echo "<h3> Genere: $film_2->genre</h3>";
echo "<h3> Regista: $film_2->producer</h3>";
echo "<h3> Cast: $film_2->cast</h3>";
echo "<div><strong> Durata: </strong> $film_2->duration</div>";
echo "<div><strong> Anno: </strong> $film_2->exit_date</div>";
echo '<p><strong> Trama: </strong>' . $film_2->getExcerpt() . '</p>';