<?php

include("./Prodotto.php");

class Cucce extends Prodotto
{
    private $dimensione;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria, $dimensione)
    {
        parent::__construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria);

        $this->setPeso($dimensione);
    }

    public function setPeso($dimensione)
    {
        $this->dimensione = $dimensione;
    }

    public function getPeso()
    {
        return $this->dimensione;
    }
}