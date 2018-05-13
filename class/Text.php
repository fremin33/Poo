<?php
namespace Tutoriel;


class Text
{
    /* Permet d'appelé une variable sur la class elle-même (self::$suffix) */
    private static $suffix = ' €';
    /* Permet d'appelé une variable sur la class elle-même (self::SUFFIX) */
    const SUFFIX = ' €';

    /* Permet d'utiliser withZero directement sur la class Text (Text::withZero()) */
    public static function publicWithZero($chiffre) {
        /* self fait référence à la class elle-même (pas un objet) */
        return self::withZero($chiffre);
    }


    private static function withZero($chiffre)
    {
        return ($chiffre < 10) ? "0{$chiffre}" .self::$suffix : $chiffre . self::SUFFIX;

    }
}