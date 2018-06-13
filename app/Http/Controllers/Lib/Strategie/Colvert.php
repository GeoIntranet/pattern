<?php namespace App\Lib\Strategie;

class Colvert extends Canard{
    public function __construct()
    {
        $this->comportementVol = new volerAille() ;
        $this->comportementParler = new cancanParle() ;
        parent::__construct($this->comportementVol,$this->comportementParler);
    }

    public function setComportementVolle(InterfaceComportementVole $comportementVole)
    {
        parent::__construct($comportementVole,$this->comportementParler);
    }

    public function setComportementParle(InterfaceComportementParler $comportementParler)
    {
        parent::__construct($this->comportementVol,$comportementParler);
    }
}