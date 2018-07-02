<?php
namespace App;
class App
{
    const DB_NAME = 'tutorialPoo';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';
    private static $database;

    private static $title = "Mon super site";

    /**
     * Get the value of database
     */
    public static function getDatabase()
    {
        if (self::$database == null) {
            self::$database = new Database(self::DB_NAME, self::DB_HOST, self::DB_USER, self::DB_PASS);
        }
        return self::$database;
    }

    public static function notFound() {
        header('HTTP/1.0 404 Not Found');
        header('location:index.php?p=404');
    }

    public static function getTitle() {
        return self::$title;
    }

    public static function setTitle($title) {
        self::$title = "$title | " . self::$title;
    }

}
