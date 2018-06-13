<?php

namespace App\Http\Controllers;

use App\Lib\Strategie\BuzzEclaire;
use App\Lib\Strategie\Colvert;
use App\Lib\Strategie\novoiceParle;
use App\Lib\Strategie\volerReactor;

class StrategieController extends Controller
{
    public function index()
    {
        $colvert = New Colvert();
        $colvert->vol();
        $colvert->setComportementVolle(new VolerReactor());
        $colvert->vol();

        $colvert->parle();
        $colvert->setComportementParle(new novoiceParle());
        $colvert->parle();

        $canard2 = New BuzzEclaire();
        $canard2->vol();
        $canard2->parle();
        die();
    }
}
