<?php

class Archer extends Personnage
{
//    protected $vie = 40;

    public function __construct($nom)
    {
        $this->vie /= 2;
        parent::__construct($nom);
    }

    public function attack($cible)
    {
        $cible->vie -= 2 * $this->atk;
        $cible->empecher_negatif();

        /* Appel la méthode attack de la classe Personnage */
        parent::attack($cible);
    }

}

