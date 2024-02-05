<?php

include("./Prodotto.php");

class Cibo extends Prodotto
{

    private $peso;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine,$categoria, $peso)
    {
        parent::__construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria);
        $this->setPeso($peso);
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}