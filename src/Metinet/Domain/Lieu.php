<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:42
 */

namespace Metinet\Domain;


class Lieu
{
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $pays;
    private $nombrePersonneMax;

    /**
     * Lieu constructor.
     * @param $nom
     * @param $adresse
     * @param $codePostal
     * @param $ville
     * @param $pays
     * @param $nombrePersonneMax
     */
    public function __construct(string $nom, string $adresse, int $codePostal, string $ville, string $pays, int $nombrePersonneMax)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->nombrePersonneMax = $nombrePersonneMax;
    }


}