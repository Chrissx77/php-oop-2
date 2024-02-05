<?php
class Prodotto
{

    private $prezzo;
    private $titolo;
    private $icona_categoria;
    private $tipo_articolo;
    private $immagine;
    private $categoria;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria)
    {

        $this->setPrezzo($prezzo);
        $this->setTitolo($titolo);
        $this->setIcon($icona_categoria);
        $this->setTipo($tipo_articolo);
        $this->setImmagine($immagine);
        $this->setCategoria($categoria);
    }


    // SETTER METHODS
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;
    }

    public function setIcon($icona_categoria)
    {
        $this->icona_categoria = $icona_categoria;
    }

    public function setTipo($tipo_articolo)
    {
        $this->tipo_articolo = $tipo_articolo;
    }

    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }


    // GETTER METHODS
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function getIcon()
    {
        return $this->icona_categoria;
    }

    public function getTipo()
    {
        return $this->tipo_articolo;
    }

    public function getImmage()
    {
        return $this->immagine;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}