<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 12:01
 */

namespace Metinet\Domain;


class DateConference
{
    private $dateEvent;
    private $heureDebut;
    private $heureFin;

    public function __construct(string $dateEvent, int $heureDebut, int $heureFin)
    {
        $dateEventAsDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateEvent));
        if ($dateEventAsDateTime < new \DateTimeImmutable('now')) {

            throw InvalidDateEvent::mustNotBeInThePast();
        }

        if ($heureFin < $heureDebut) {

            throw InvalidDateEvent::mustNotBeLess();
        }

        $this->dateEvent = $dateEventAsDateTime;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
    }
}