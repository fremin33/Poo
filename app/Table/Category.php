<?php
namespace App\Table;

use App\App;

class Category extends Table {

    protected static $table = "category";
    protected static $id = "id_category";

    public function getUrl()
    {
        return "index.php?p=category&id={$this->id_category}";
    }
}