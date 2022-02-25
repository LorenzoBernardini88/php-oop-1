<pre>
<?php

require_once __DIR__.'/classes/Movie.php';

// ISTANZA PRIMO FILM.
$primoFilm = new Movie("Dune","Denis Villeneuve","Timothée Chalamet");
$primoFilm->setGenere('Avventura');

//ISTANZA SECONDO FILM.
$secondoFilm = new Movie("Tenet","Christopher Nolan","John David Washington");
$secondoFilm->setGenere('Fantascienza');

var_dump($primoFilm);
var_dump($secondoFilm);

?>
</pre>





