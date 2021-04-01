<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeEmprunt
 *
 * @ORM\Table(name="demandeempreint")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\DemandeEmpruntRepository")
 */
class DemandeEmprunt
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="idmembre", referencedColumnName="id")
     */
    private $user;

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
     * @var int
     *
     * @ORM\Column(name="idlivre", type="integer")
     */
    private $idlivre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDemande", type="date")
     */
    private $dateDemande;


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
     * Set idlivre
     *
     * @param integer $idlivre
     *
     * @return DemandeEmprunt
     */
    public function setIdlivre($idlivre)
    {
        $this->idlivre = $idlivre;

        return $this;
    }

    /**
     * Get idlivre
     *
     * @return int
     */
    public function getIdlivre()
    {
        return $this->idlivre;
    }

    /**
     * Set dateDemande
     *
     * @param \DateTime $dateDemande
     *
     * @return DemandeEmprunt
     */
    public function setDateDemande($dateDemande)
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    /**
     * Get dateDemande
     *
     * @return \DateTime
     */
    public function getDateDemande()
    {
        return $this->dateDemande;
    }
}

