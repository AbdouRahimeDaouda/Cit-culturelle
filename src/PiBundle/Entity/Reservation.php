<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date")
     */
    private $dateReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="reponse", type="integer")
     */
    private $reponse;



    /**
     * @ORM\ManyToOne(targetEntity="UserEvent")
     * @ORM\JoinColumn(name="id_user_event", referencedColumnName="id")
     */
    private $UserEvent;

    /**
     * @return mixed
     */
    public function getUserEvent()
    {
        return $this->UserEvent;
    }

    /**
     * @param mixed $UserEvent
     */
    public function setUserEvent($UserEvent)
    {
        $this->UserEvent = $UserEvent;
    }

    /**
     * @ORM\OneToOne(targetEntity="Evenement", inversedBy="Reservation")
     * @ORM\JoinColumn(name="id_event", referencedColumnName="id")
     */


    private $Evenement;

    /**
     * @return mixed
     */
    public function getEvenement()
    {
        return $this->Evenement;
    }

    /**
     * @param mixed $Evenement
     */
    public function setEvenement($Evenement)
    {
        $this->Evenement = $Evenement;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Reservation
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set reponse
     *
     * @param integer $reponse
     *
     * @return Reservation
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return int
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}

