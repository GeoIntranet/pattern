<?php namespace App\Lib\Strategie;

class volerReactor implements InterfaceComportementVole{
    public function vol()
    {
        return $this->voler();
    }
    public function voler()
    {
        echo 'je vole avec un reacteur a propulsion haha <br>';
    }
}