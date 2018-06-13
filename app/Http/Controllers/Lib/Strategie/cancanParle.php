<?php namespace App\Lib\Strategie;

class cancanParle implements InterfaceComportementParler
{
    public function parle()
    {
        echo " couicouin vilain canard <br>";
    }
}