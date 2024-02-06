<?php

class Cibo extends Prodotto
{

    private $peso;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine,$categoria, $peso)
    {
        parent::__construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria);
        $this->set($peso);
    }

    public function set($peso)
    {
        $this->peso = $peso; 
    }

    public function get()
    {
        return $this->peso;
    }
}