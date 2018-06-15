<?php

namespace App\Http\Controllers;

use App\Lib\Singleton\Singleton;
use App\Lib\Strategie\CommandeMixte;

class SingletonController extends Controller
{
    public function index()
    {
        // un object quelquonc
        $commande = new CommandeMixte();

        // notre singleton
        $singleton = Singleton::boot();

        /**
         * quelque soit le nombre de fois , ou l'on voudra le recuperer ,
         * sa sera tjs le meme objet.
         */
        $singleton1 = Singleton::boot();
        $singleton2 = Singleton::boot();
        $singleton3 = Singleton::boot();

        // si tentative de clonage de l'objet , sa declenche une erreur
        //  $singleton3 = clone $singleton1;

        // une methode de stockage dans le singleton
        //  $singleton->setObject($commande,'commande');

        // recuperer un object stock par le singleton
        //  $obj = $singleton->getObject('commande');


        var_dump($singleton);
        var_dump($singleton1);
        var_dump($singleton2);

        //var_dump($singleton3);
        //var_dump($obj);
    }
}
