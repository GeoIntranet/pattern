<?php namespace App\Lib\Strategie;

class prixHT implements InterfaceCalculePrix
{
    public function prix()
    {
        echo 'prix hors taxe  <br><br>';
    }
}