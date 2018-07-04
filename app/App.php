<?php
namespace App;

class App
{
   private static $_instance;
   private $db_instance;
   public $title = "Mon super site";

   public static function getInstance() {
       if (is_null(self::$_instance)) {
           self::$_instance = new App();
       }
       return self::$_instance;
   }

   public function getTable($name) {
       $class_name = "App\Table\\". ucfirst($name) . "Table";
       return new $class_name();
   }

   public function getDb() {
       $config = Config::getInstance();
       if (is_null($this->db_instance)) {
        $this->db_instance =  new Database($config->getDb('db_name'), $config->getDb('db_user'), $config->getDb('db_pass'), $config->getDb('db_host'));
    }
    return $this->db_instance;
   }

}
