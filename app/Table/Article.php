<?php

namespace App\Table;

use App\App;

class Article extends Table
{
    protected static $table = 'article';
    protected static $id = "id_article";

    public static function getLast() {
        return self::query("
            SELECT article.id_article, article.title, article.content, category.title as category 
            FROM article 
            LEFT JOIN category on category.id_category = article.id_category
            ORDER BY article.date DESC");
    }

    /**
     * @param $name
     * @todo Call method if $key is not define (url => getUrl())
     */
    public function __get($key)
    {
        $method = "get" . ucfirst($key);
        /* Evite de répéter l'appel plusieurs fois */
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl()
    {
        return "index.php?p=article&id={$this->id_article}";
    }


    public function getExcerpt()
    {
        $html = "<p>" . substr($this->content, 0, 300) . "...</p>";
        $html .= "<p><a href='{$this->getUrl()}'>Voir la suite</a></p>";
        return $html;
    }

    public static function getLastByCategory($id_category) {
        return self::query("
            SELECT article.id_article, article.title, article.content, category.title as category 
            FROM article 
            LEFT JOIN category on category.id_category = article.id_category 
            WHERE category.id_category = ?
            ORDER BY article.date DESC"
        ,[$id_category]);
    }

    public static function find($id) {
        return self::query("
        SELECT article.id_article, article.title, article.content, category.title as category 
        FROM " .static::$table."  
        LEFT JOIN category on category.id_category = article.id_category
        WHERE ". static::$id . "= ?", 
        [$id], true);
    }
}