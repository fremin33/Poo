<?php

use App\Autoloader;
use App\Database;
use App\App;
use App\Config;

require '../app/Autoloader.php';
Autoloader::register();

$app = App::getInstance();

$articles = $app->getTable('article');
$categories = $app->getTable('category');

var_dump($articles->all());