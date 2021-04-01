<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * empreint
 *
 * @ORM\Table(name="empreint")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\empreintRepository")
 */
class empreint
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
     * @ORM\Column(name="dateretour", type="date")
     */
    private $dateretour;

    /**
     * @var \Integer
     *
     * @ORM\Column(name="idlivre", type="integer")
     */
    private $idlivre;

    /**
     * @return int
     */
    public function getIdlivre()
    {
        return $this->idlivre;
    }

    /**
     * @param int $idlivre
     */
    public function setIdlivre($idlivre)
    {
        $this->idlivre = $idlivre;
    }


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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     *
     * @return empreint
     */
    public function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime
     */
    public function getDateretour()
    {
        return $this->dateretour;
    }
}

