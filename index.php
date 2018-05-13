<?php

require 'Form.php';
require 'Text.php';
require 'Personnage.php';

$merlin = new Personnage('merlin');
$merlin->regenerer();
var_dump($merlin);

$form = new Form(array(
    'username' => 'Roger'
));


/* Création de 2 champs */
echo $form->input('username');
echo $form->input('password');
echo $form->submit();

var_dump(Text::publicWithZero(9));