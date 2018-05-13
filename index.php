<?php

require 'Form.php';

$form = new Form(array(
    'username' => 'Roger'
));


/* Création de 2 champs */
echo $form->input('username');
echo $form->input('password');
echo $form->submit();