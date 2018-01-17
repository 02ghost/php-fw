<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:23
 */

namespace Metinet\Domain;

use Metinet\Domain\DateConference;
use Metinet\Domain\Lieu;

class Conference
{
    private $nomEleve;
    private $titre;
    private $description;
    private $objectifs;
    private $Salle;
    private $nombrePersonnes;
    private $date;
    private $private;

    /**
     * Conference constructor.
     * @param $nomEleve
     * @param $titre
     * @param $description
     * @param $objectifs
     * @param $Salle
     * @param $nombrePersonnes
     * @param $date
     */
    public function __construct(Student $nomEleve, string $titre, string $description, array $objectifs = [], Lieu $Salle, int $nombrePersonnes, DateConference $date, bool $private)
    {
        $this->nomEleve = $nomEleve;
        $this->titre = $titre;
        $this->description = $description;
        $this->objectifs = $objectifs;
        $this->Salle = $Salle;
        $this->nombrePersonnes = $nombrePersonnes;
        $this->date = $date;
        $this->private = $private;
    }


}