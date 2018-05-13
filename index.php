<?php

require 'Personnage.php';

/* Création d'un objet personnage */
$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');

/* Accées au propriété et méthod de l'objet */
$merlin->crier();
$merlin->regenerer();

/* Affectation de valeur au propriété d'un objet */
//$merlin->nom = 'Merlin';

$merlin->attack($harry);
if ($harry->mort()) {
    echo 'Harry est mort';
} else {
    echo 'Harry à survécu';
}

var_dump($harry);
var_dump($merlin);
