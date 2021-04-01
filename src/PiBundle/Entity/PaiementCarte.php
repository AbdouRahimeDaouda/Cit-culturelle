<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementCarte
 *
 * @ORM\Table(name="paiement_carte")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\PaiementCarteRepository")
 */
class PaiementCarte
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
     * @var string
     *
     * @ORM\Column(name="type_carte", type="string", length=255)
     */
    private $typeCarte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expiration", type="date")
     */
    private $dateExpiration;

    /**
     * @var float
     *
     * @ORM\Column(name="somme", type="float")
     */
    private $somme;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_carte", type="string", length=255)
     */
    private $numerocarte;

    /**
     * @return string
     */
    public function getNumerocarte()
    {
        return $this->numerocarte;
    }

    /**
     * @param string $numerocarte
     */
    public function setNumerocarte($numerocarte)
    {
        $this->numerocarte = $numerocarte;
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
     * Set typeCarte
     *
     * @param string $typeCarte
     *
     * @return PaiementCarte
     */
    public function setTypeCarte($typeCarte)
    {
        $this->typeCarte = $typeCarte;

        return $this;
    }

    /**
     * Get typeCarte
     *
     * @return string
     */
    public function getTypeCarte()
    {
        return $this->typeCarte;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     *
     * @return PaiementCarte
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set somme
     *
     * @param float $somme
     *
     * @return PaiementCarte
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return float
     */
    public function getSomme()
    {
        return $this->somme;
    }


}

