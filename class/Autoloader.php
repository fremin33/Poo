<?php

namespace Tutoriel;

/**
 * Class Autoloader
 * Permet de charger les autres Class
 */
class Autoloader
{

    /**
     * Appelle la methode static Autoloader::autoload
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }


    /**
     * @param $className string Class à appeler
     * @todo Appelle les fichiers dans le dossier class
     */
    static function autoload($className)
    {
        /* On vérifie que le namespace chargé est bien à la même position que Tutoriel*/
        if (strpos($className, __NAMESPACE__) === 0) {
            /* On modifie les \ par des / (namespace path) et on supprime le namespace global Tutoriel */
            $className = str_replace(__NAMESPACE__ . '\\', '', $className);
            $className = str_replace('\\', '/', $className);
            require "class/{$className}.php";
        }
    }


    /**
     * @param $className string Class à appeler
     * @todo Appelle les fichiers dans le dossier class mais limité à un autoloader
     */
    /*
    static function __autoload($className)
    {
        require "class/{$className}.php";

    }
    */

}