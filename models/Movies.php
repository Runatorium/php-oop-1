<?php

class Movie
{
    public $title;
    public $oLang;
    public $Length;


    public function lunghezza()
    {
        if ($this->Length > 3) {
            echo "il film è lungo, dura ben " . $this->Length . " ore";
        }
    }

}
$lotr = new Movie();
$lotr->title = "Il Signore degli anelli: Il ritorno del Rè";
$lotr->oLang = "Eng";
$lotr->Length = "4.23";
$lotr->lunghezza();


var_dump($lotr)
    ?>