<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 16:42
 */

class InvalidMail extends \Exception
{
    public static function mustNotBeMail(): self
    {
        return new self('It is not a mail');
    }
}