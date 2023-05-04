<?php
require __DIR__ . '/models/Movies.php';

$lotr = new Movie("Il Signore degli anelli: Il ritorno del Rè", "Eng", 4.22, "Fantasy");
var_dump($lotr);
$lotr->lunghezza();

$thf = new Movie("The Hidden Fortress", "Jap", 2.19, "Dramma");
var_dump($thf);
$thf->lunghezza();

?>