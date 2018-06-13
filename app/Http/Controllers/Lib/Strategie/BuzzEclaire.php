<?php namespace App\Lib\Strategie;

class BuzzEclaire extends Canard{
    public function __construct()
    {
        $this->comportementVol = new VolerReactor() ;
        $this->comportementParler = new novoiceParle() ;

        parent::__construct(
            $this->comportementVol,
            $this->comportementParler
        );
    }
}