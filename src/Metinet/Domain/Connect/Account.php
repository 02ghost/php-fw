<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 10:05
 */

use Metinet\Domain\Conferences\Email;
use Metinet\Domain\Conferences\Password;

class Account
{
    private $email;
    private $password;

    /**
     * Account constructor.
     * @param $email
     * @param $password
     */
    public function __construct(Email $email, Password $password)
    {
        $this->email = $email;
        $password = hashage($password);
        $this->password = $password;
    }


}