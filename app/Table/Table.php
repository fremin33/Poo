<?php
namespace App\Table;

use App\App;

class Table {

    protected static $table;

public static function query($statement, $attributes = array(), $one = false) {
    if ($attributes) {
        return App::getDatabase()->prepare($statement, $attributes, get_called_class(), $one);
    } else {
        return App::getDatabase()->query($statement, get_called_class(), $one);
    }
}

    public function __get($key)
    {
        $method = "get" . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public static function all() {
        return App::getDatabase()->query("
            SELECT * FROM " . static::$table,
        get_called_class());
    }

    public static function find($id) {
        return static::query("
        SELECT * FROM " . static::$table . "
        WHERE ". static::$id . "= ?", 
        [$id], true);
    }

}