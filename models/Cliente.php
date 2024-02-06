<?php
class Cliente{
    private $name;
    private $surname;
    private $cf;
    
    public function __construct($name, $surname, $cf)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setCf($cf);
        
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }

    public function setCf($cf){
        $this->cf = $cf;
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getCf(){
        return $this->cf;
    }
}