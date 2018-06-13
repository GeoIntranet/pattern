<?php namespace App\Lib\Strategie;

abstract class Canard
{
    public function __construct(
        InterfaceComportementVole $comportementVole,
        InterfaceComportementParler $comportementParler
    ){
        $this->comportementVol = $comportementVole;
        $this->comportementParler = $comportementParler;
    }

    public function vol()
    {
        return $this->comportementVol->vol();
    }

    public function parle()
    {
        return $this->comportementParler->parle();
    }

}