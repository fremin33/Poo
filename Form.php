<?php

/**
 * Class Form
 * Permet de générer un formulaire facilement et rapidement
 */
class Form
{
    /**
     * @var array Données utilisées par le formulaire
     */
    private $data;
    /**
     * @var string Tag utilisé pour entouré les champs
     */
    public $surround = 'p';

    /**
     * Form constructor.
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array())
    {
        $this->data = $data;

    }


    /**
     * @param $name
     * @return string
     */
    public function input($name)
    {
        return $this->surround("<input type='text' name='{$name}' value='{$this->getValue($name)}'>");
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround("<button type='submit'>Envoyer</button>");
    }

    /**
     * @param $html string code html à entouré
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index string Index de la valeur à récupérer
     * @return mixed|null
     */
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
}