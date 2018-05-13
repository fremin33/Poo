<?php

/* Définition d'une class */

class Personnage
{
    /* Propriété d'un objet */
    /* 3 niveaux :
        - public : Accessible partout
        - private : Accessible depuis la class
        - protected : Accessible depuis la class et les class qui en hérité
    */
    private $vie = 80;
    private $atk = 110;
    private $nom;

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


    public function attack($cible)
    {
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
    }

    private function empecher_negatif()
    {
        if ($this->vie < 0) {
            $this->vie = 0;
        }

    }

    /* Getter */
    public function getNom()
    {
        return $this->nom;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    /* Setter */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    public function setAtk($atk)
    {
        $this->atk = $atk;
    }
}