<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\FactureRepository")
 */
class Facture
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
     * @var float
     *
     * @ORM\Column(name="prix_total", type="float")
     */
    private $prixTotal;

    /**
     * @ORM\ManyToOne(targetEntity="Reservation", inversedBy="Facture")
     * @ORM\JoinColumn(name="id_reservation", referencedColumnName="id")
     */


    private $Reservation;

    /**
     * @ORM\OneToOne(targetEntity="PaiementCarte", inversedBy="Facture")
     * @ORM\JoinColumn(name="paiement", referencedColumnName="id")
     */


    private $PaiementCarte;

    /**
     * @return mixed
     */
    public function getPaiementCarte()
    {
        return $this->PaiementCarte;
    }

    /**
     * @param mixed $PaiementCarte
     */
    public function setPaiementCarte($PaiementCarte)
    {
        $this->PaiementCarte = $PaiementCarte;
    }
    /**
     * @return mixed
     */
    public function getReservation()
    {
        return $this->Reservation;
    }

    /**
     * @param mixed $Reservation
     */
    public function setReservation($Reservation)
    {
        $this->Reservation = $Reservation;
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
     * Set prixTotal
     *
     * @param float $prixTotal
     *
     * @return Facture
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }
}

