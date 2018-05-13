<?php

use \Tutoriel\Autoloader;
use \Tutoriel\HTML\BootsrapForm;

require 'class/Autoloader.php';
Autoloader::register();
$form = new BootsrapForm();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<form action="#" method="post">
    <?= $form->input('Username') ?>
    <?= $form->input('Password') ?>
    <?= $form->submit() ?>
    <?= $form->date() ?>
</form>
</body>
</html>


