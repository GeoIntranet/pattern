<?php namespace App\Lib\Strategie;

class volerAille implements InterfaceComportementVole{
    public function vol()
    {
        return $this->voler();
    }
    public function voler()
    {
        echo 'je vole avec des aile <br>';
    }
}