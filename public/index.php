<?php

use App\Autoloader;
use App\Database;
use App\App;

require '../app/Autoloader.php';
Autoloader::register();


if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

/* ob_start() va temporiser le contenu sans l'afficher */
ob_start();
if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'article') {
    require '../pages/single.php';
} elseif ($p === 'category') {
    require '../pages/category.php';
}

/* Retourne le contenu du tampon de sortie et termine la session de temporisation. */
$content = ob_get_clean();

require '../pages/templates/default.php';