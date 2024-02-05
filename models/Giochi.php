<?php

include("./Prodotto.php");

class Giochi extends Prodotto
{
    private $tipologia;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine,$categoria, $tipologia)
    {
        parent::__construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria);

        $this->setPeso($tipologia);
    }

    public function setPeso($tipologia)
    {
        $this->tipologia = $tipologia;
    }

    public function getPeso()
    {
        return $this->tipologia;
    }
}