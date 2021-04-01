<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * offresponsoring
 *
 * @ORM\Table(name="offresponsoring")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\offresponsoringRepository")
 */
class offresponsoring
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="package", type="string", length=255)
     */
    private $package;
    /**
     * @ORM\OneToOne(targetEntity="Sponsor", inversedBy="demandesponsoring")
     * @ORM\JoinColumn(name="idSponsor", referencedColumnName="id")
     */


    private $Sponsor;

    /**
     * @return mixed
     */
    public function getSponsor()
    {
        return $this->Sponsor;
    }

    /**
     * @param mixed $Sponsor
     */
    public function setSponsor($Sponsor)
    {
        $this->Sponsor = $Sponsor;
    }
    /**
     * @ORM\OneToOne(targetEntity="Evenement", inversedBy="Sponsor")
     * @ORM\JoinColumn(name="idEvent", referencedColumnName="id")
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
     * Set description
     *
     * @param string $description
     *
     * @return offresponsoring
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return offresponsoring
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return offresponsoring
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set package
     *
     * @param string $package
     *
     * @return offresponsoring
     */
    public function setPackage($package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }
}

