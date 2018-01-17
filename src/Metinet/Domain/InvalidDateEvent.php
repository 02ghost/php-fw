<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:49
 */

namespace Metinet\Domain;

class InvalidDateEvent extends \Exception
{
    public static function mustNotBeInThePast(): self
    {
        return new self('Conference cannot be in the past');
    }

    public static function mustNotBeLess(): self
    {
        return new self('Finish hour cannot be short than begin hour');
    }
}