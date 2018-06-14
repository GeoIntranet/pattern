<?php namespace App\Lib\Strategie;

class CommandeMixte extends Commande
{

    public function __construct(
        InterfaceCalculePrix $calculePrix = null
    )
    {
        $this->CalculePrix = $calculePrix == null ? new prixBasique() : $calculePrix ;

        parent::__construct($this->CalculePrix);
    }

    public function setCalculePrix(InterfaceCalculePrix $calculePrix)
    {
        parent::__construct($calculePrix);
    }


}