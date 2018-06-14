<?php

namespace App\Http\Controllers;

use App\Lib\Strategie\BuzzEclaire;
use App\Lib\Strategie\Colvert;
use App\Lib\Strategie\CommandeMixte;
use App\Lib\Strategie\novoiceParle;
use App\Lib\Strategie\prixBasique;
use App\Lib\Strategie\prixHT;
use App\Lib\Strategie\prixRemise;
use App\Lib\Strategie\volerReactor;

class StrategieController extends Controller
{
    public function index()
    {

        $prixBasique = new prixBasique();

        $commande = new CommandeMixte();
        $commande->prix();

        $commande->setCalculePrix( new prixRemise() );
        $commande->prix();

        //$commande->setCalculeRemise( new calculeRemise() );
        //$commande->setCalculeMarge( new calculeMarge() );
        //$commande->setCalculexxxx( new xxxxComportement() );

        //$commande->remise();
        //$commande->marge();
        //$commande->xxxcomportement();



        $commande->setCalculePrix( new prixHT() );
        $commande->prix();

        //$commande->setCalculePrix( new PrixHorsTaxe() );
        //
        //$commande->prix();
        //$commande->setCalculePrix( new PrixTTC() );


        //$colvert = New Colvert();
        //$colvert->vol();
        //$colvert->setComportementVolle(new VolerReactor());
        //$colvert->vol();
        //
        //$colvert->parle();
        //$colvert->setComportementParle(new novoiceParle());
        //$colvert->parle();
        //
        //$canard2 = New BuzzEclaire();
        //$canard2->vol();
        //$canard2->parle();
        die();
    }
}
