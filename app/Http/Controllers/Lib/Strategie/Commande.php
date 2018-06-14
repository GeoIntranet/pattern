<?php
/**
 * Created by PhpStorm.
 * User: gvalero
 * Date: 14/06/2018
 * Time: 16:38
 */

namespace App\Lib\Strategie;

abstract class Commande
{
    public function __construct( InterfaceCalculePrix $calculePrix ){
        $this->calculePrix = $calculePrix;
    }


    public function prix()
    {
        return $this->calculePrix->prix();
    }



}