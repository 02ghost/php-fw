<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 16:31
 */

namespace Metinet\Domain;

use Metinet\Domain\Num;


class Participant
{
    private $nom;
    private $prenom;
    private $mail;
    private $numerosTelephone;

    /**
     * Participant constructor.
     * @param $nom
     * @param $prenom
     * @param $mail
     * @param $numerosTelephone
     */
    public function __construct(string $nom, string $prenom, Num $mail, string $numerosTelephone)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->numerosTelephone = $numerosTelephone;
    }


}