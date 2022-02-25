
<pre>
<?php

require_once __DIR__.'/classes/Movie.php';

$primoFilm = new Movie("Dune","Denis Villeneuve","Timothée Chalamet");
$primoFilm->setGenere('Avventura');


$secondoFilm = new Movie("Tenet","Christopher Nolan","John David Washington");
$secondoFilm->setGenere('Fantascienza');



var_dump($primoFilm);
var_dump($secondoFilm);


?>
</pre>

