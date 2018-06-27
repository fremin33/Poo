<?php

namespace App\Table;
class Article
{

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
}