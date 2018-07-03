<?php
namespace App;

class Config {

    private $settings = [];
    private static $_instance;

    
    /**
     * Singleton, instancier une fois dans l'application 
     *
     * @return object
     */
    public static function getInstance() {
        if (is_null(self::$_instance)) {
            return new Config();
        }
        return self::$_instance;
    }

    /**
     * Récupère les id de la BDD
     */
    public function __construct()
    {
        $this->settings = require dirname(__DIR__) .'/config/config.php';
    }

    /**
     * Récupère les valeurs de la BDD à sa key
     *
     * @param string $key
     * @return string
     */
    public function get($key) {
        if (isset($this->settings[$key])) {
            return $this->settings[$key];
        }
        return null;
    }
}