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
        genre $genere
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

class Genre
{
    public $genre1;
    public $genre2;
    public $genre3;

    function __construct(
        $genereMain,
        $genereSecond,
        $genereThird
    ) {
        $this->genre1 = $genereMain;
        $this->genre2 = $genereSecond;
        $this->genre3 = $genereThird;
    }
}
?>