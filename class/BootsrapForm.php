<?php

class BootsrapForm extends Form
{


    /**
     * @param $html string code html à entouré
     * @return string
     */
    protected function surround($html)
    {
        return "<div class='form-group'>{$html}</div>";
    }

    /**
     * @param $name
     * @return string
     */
    public function input($name)
    {
        return $this->surround(
            "<label>{$name}</label>
            <input type='text' name='{$name}' value='{$this->getValue($name)}' class='form-control'>");
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround("<button class='btn btn-primary' type='submit'>Envoyer</button>");
    }
}