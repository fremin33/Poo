<?php
namespace App;

use App\Database\MysqlDatabase;


class App
{

   private static $_instance;
   private $db_instance;
   public $title = "Mon super site";

    /**
     * Singleton, instancier une fois dans l'application 
     *
     * @return object
     */
   public static function getInstance() {
       if (is_null(self::$_instance)) {
           self::$_instance = new App();
       }
       return self::$_instance;
   }

    /**
     * Factory, chargé d'instancier les classes
     *
     * @return object
     */
   public function getTable($name) {
       $class_name = "App\Table\\". ucfirst($name) . "Table";
       return new $class_name($this->getDb());
   }

    /**
     * Singleton + Factory
     *
     * @return object
     */
   public function getDb() {
       $config = Config::getInstance();
       if (is_null($this->db_instance)) {
           $this->db_instance =  new MysqlDatabase($config->get('db_name'), $config->get('db_host'), $config->get('db_user'), $config->get('db_pass'));
        }
    return $this->db_instance;
   }

}
