<?php
require __DIR__ . '/models/Movies.php';

$lotr = new Movie("Il Signore degli anelli: Il ritorno del Rè", "Eng", 4.22, new Genre('Fantasy', 'Adventure', 'Action'));
var_dump($lotr);
$lotr->lunghezza();

$thf = new Movie("The Hidden Fortress", "Jap", 2.19, new Genre('Dramma', 'Adventure', 'History'));
var_dump($thf);
$thf->lunghezza();

?>