<?php
require 'Personnage.php';
require 'Archer.php';

$merlin = new Personnage('Merlin');
$harry= new Personnage('Harry');

$legolas = new Archer('Legolas');

var_dump($legolas);
//$legolas->attack($harry);
var_dump($harry);
