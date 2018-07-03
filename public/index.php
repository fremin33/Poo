<?php

use App\Autoloader;
use App\Database;
use App\App;
use App\Config;

require '../app/Autoloader.php';
Autoloader::register();

$config = Config::getInstance();

$app = App::getInstance();
$app->title = "Titre de test";