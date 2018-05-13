<?php

/* Définition d'une class */

class Personnage
{
    /* Propriété d'un objet */
    public $vie = 80;
    public $atk = 110;
    public $nom;

    /* Méthode appelé à la création d'un nouvel objet */
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    /* Méthode de class */
    public function crier()
    {
        echo "A L'ATTAQUE";
    }

    public function regenerer($hp = null)
    {
        /* $this fais référence à l'objet lui même (harry ou merlin)*/
        if (is_null($hp)) {
            $this->vie = 100;
        } else {
            $this->vie += $hp;
        }
    }

    public function mort()
    {
        return $this->vie <= 0;
    }


    public function attack($cible){
        $cible->vie -= $this->atk;
    }
}