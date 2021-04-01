<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\ClubRepository")
 */
class Club
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
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     *
     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="groupeAge", type="string", length=255)
     */
    private $groupeAge;

    /**
     * @var float
     *
     * @ORM\Column(name="prixInscri", type="float")
     */
    private $prixInscri;

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
     * @var string
     *
     * @ORM\Column(name="president", type="string", length=255)
     */
    private $president;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrParticipant", type="integer")
     */
    private $nbrParticipant;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float")
     */
    private $budget;

    /**
     * @var int
     *
     * @ORM\Column(name="seanceSemaine", type="integer")
     */
    private $seanceSemaine;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeSeance", type="integer")
     */
    private $dureeSeance;
    /**
     * @ORM\ManyToOne(targetEntity="Salle", inversedBy="Club")
     * @ORM\JoinColumn(name="idSalle", referencedColumnName="id")
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
     * @return Club
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
     * Set genre
     *
     * @param string $genre
     *
     * @return Club
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Club
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set groupeAge
     *
     * @param string $groupeAge
     *
     * @return Club
     */
    public function setGroupeAge($groupeAge)
    {
        $this->groupeAge = $groupeAge;

        return $this;
    }

    /**
     * Get groupeAge
     *
     * @return string
     */
    public function getGroupeAge()
    {
        return $this->groupeAge;
    }

    /**
     * Set prixInscri
     *
     * @param float $prixInscri
     *
     * @return Club
     */
    public function setPrixInscri($prixInscri)
    {
        $this->prixInscri = $prixInscri;

        return $this;
    }

    /**
     * Get prixInscri
     *
     * @return float
     */
    public function getPrixInscri()
    {
        return $this->prixInscri;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Club
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
     * @return Club
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
     * Set president
     *
     * @param string $president
     *
     * @return Club
     */
    public function setPresident($president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get president
     *
     * @return string
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set nbrParticipant
     *
     * @param integer $nbrParticipant
     *
     * @return Club
     */
    public function setNbrParticipant($nbrParticipant)
    {
        $this->nbrParticipant = $nbrParticipant;

        return $this;
    }

    /**
     * Get nbrParticipant
     *
     * @return int
     */
    public function getNbrParticipant()
    {
        return $this->nbrParticipant;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Club
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set seanceSemaine
     *
     * @param integer $seanceSemaine
     *
     * @return Club
     */
    public function setSeanceSemaine($seanceSemaine)
    {
        $this->seanceSemaine = $seanceSemaine;

        return $this;
    }

    /**
     * Get seanceSemaine
     *
     * @return int
     */
    public function getSeanceSemaine()
    {
        return $this->seanceSemaine;
    }

    /**
     * Set dureeSeance
     *
     * @param integer $dureeSeance
     *
     * @return Club
     */
    public function setDureeSeance($dureeSeance)
    {
        $this->dureeSeance = $dureeSeance;

        return $this;
    }

    /**
     * Get dureeSeance
     *
     * @return int
     */
    public function getDureeSeance()
    {
        return $this->dureeSeance;
    }
}

