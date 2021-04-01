<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workshop
 *
 * @ORM\Table(name="workshop")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\WorkshopRepository")
 */
class Workshop
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
     * @ORM\Column(name="nom", type="string", length=255)
     */


    /**
     * @ORM\ManyToOne(targetEntity="Salle", inversedBy="Workshop")
     * @ORM\JoinColumn(name="idSalle", referencedColumnName="id")
     */


    private $Salle;

    /**
     * @ORM\ManyToOne(targetEntity="Club", inversedBy="Workshop")
     * @ORM\JoinColumn(name="idClub", referencedColumnName="id")
     */


    private $Club;

    /**
     * @return mixed
     */
    public function getClub()
    {
        return $this->Club;
    }

    /**
     * @param mixed $Club
     */
    public function setClub($Club)
    {
        $this->Club = $Club;
    }

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->Salle;
    }

    /**
     * @param mixed $Salle
     */
    public function setSalle($Salle)
    {
        $this->Salle = $Salle;
    }

    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="NbParticipant", type="integer")
     */
    private $nbParticipant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Workshop
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nbParticipant
     *
     * @param integer $nbParticipant
     *
     * @return Workshop
     */
    public function setNbParticipant($nbParticipant)
    {
        $this->nbParticipant = $nbParticipant;

        return $this;
    }

    /**
     * Get nbParticipant
     *
     * @return int
     */
    public function getNbParticipant()
    {
        return $this->nbParticipant;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Workshop
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Workshop
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Workshop
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
}

