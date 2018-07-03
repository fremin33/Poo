<?php
namespace App;

class App
{
   private static $_instance;
   public $title = "Mon super site";

   public static function getInstance() {
       if (is_null(self::$_instance)) {
           self::$_instance = new App();
       }
       return self::$_instance;
   }

}
