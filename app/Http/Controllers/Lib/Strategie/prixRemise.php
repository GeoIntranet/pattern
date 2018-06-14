<?php namespace App\Lib\Strategie;

class prixRemise implements InterfaceCalculePrix
{
    public function prix()
    {
        echo' différent calcule logique <br><br>';
        echo 'prix -25% <br><br>';

    }
}