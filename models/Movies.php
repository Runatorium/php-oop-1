<?php

class Movie
{
    public $title;
    public $oLang;
    public $Length;
    public $genre;

    function __construct(
        $titolo,
        $originalLang,
        $durata,
        $genere
    ) {

        $this->title = $titolo;
        $this->oLang = $originalLang;
        $this->Length = $durata;
        $this->genre = $genere;
    }
    public function lunghezza()
    {
        if ($this->Length > 3) {
            echo "il film è lungo, dura ben " . $this->Length . " ore";
        } else {
            echo "il film è corto, dura solo " . $this->Length . " ore";
        }
    }



}
?>