<?php
/**
 * Created by PhpStorm.
 * User: gvalero
 * Date: 14/06/2018
 * Time: 16:43
 */

namespace App\Lib\Strategie;

class prixBasique implements InterfaceCalculePrix
{
    public function prix()
    {
        echo 'prix basique <br><br>';
    }
}