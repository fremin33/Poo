<?php

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
        require "class/{$className}.php";
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