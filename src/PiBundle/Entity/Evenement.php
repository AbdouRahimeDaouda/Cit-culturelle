<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\EvenementRepository")
 */
class Evenement
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
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="disponibles", type="integer")
     */
    private $disponibles;

    /**
     * @var float
     *
     * @ORM\Column(name="cout_reservation", type="float")
     */
    private $coutReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255)
     */
    private $age;


    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_etudiants", type="float")
     */
    private $prixEtudiants;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="image_id", type="string", length=255)
     */


    private $Img;

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->Img;
    }

    /**
     * @param mixed $Img
     */
    public function setImg($Img)
    {
        $this->Img = $Img;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Salle", inversedBy="Evenement")
     * @ORM\JoinColumn(name="salle_id", referencedColumnName="id")
     */


    private $Salle;

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
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Evenement
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Evenement
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
     * @return Evenement
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
     * Set disponibles
     *
     * @param integer $disponibles
     *
     * @return Evenement
     */
    public function setDisponibles($disponibles)
    {
        $this->disponibles = $disponibles;

        return $this;
    }

    /**
     * Get disponibles
     *
     * @return int
     */
    public function getDisponibles()
    {
        return $this->disponibles;
    }

    /**
     * Set coutReservation
     *
     * @param float $coutReservation
     *
     * @return Evenement
     */
    public function setCoutReservation($coutReservation)
    {
        $this->coutReservation = $coutReservation;

        return $this;
    }

    /**
     * Get coutReservation
     *
     * @return float
     */
    public function getCoutReservation()
    {
        return $this->coutReservation;
    }



    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Evenement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set prixEtudiants
     *
     * @param float $prixEtudiants
     *
     * @return Evenement
     */
    public function setPrixEtudiants($prixEtudiants)
    {
        $this->prixEtudiants = $prixEtudiants;

        return $this;
    }

    /**
     * Get prixEtudiants
     *
     * @return float
     */
    public function getPrixEtudiants()
    {
        return $this->prixEtudiants;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Evenement
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
     * Set etat
     *
     * @param string $etat
     *
     * @return Evenement
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


}

