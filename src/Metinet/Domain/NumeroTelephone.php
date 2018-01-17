<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 16:44
 */

namespace Metinet\Domain;


class NumeroTelephone
{
    private $telephone;

    /**
     * Mail constructor.
     * @param $mail
     */
    public function __construct($telephone)
    {
        /*if () { verification du mail
            throw InvalidMail::mustNotBeMail();
        }*/

        $this->telephone = $telephone;
    }


}