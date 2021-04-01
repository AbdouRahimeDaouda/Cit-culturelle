<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signalcommentaire
 *
 * @ORM\Table(name="signalcommentaire")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\SignalcommentaireRepository")
 */
class Signalcommentaire
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
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
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
     * @ORM\ManyToOne(targetEntity="Commentaire", inversedBy="Signalcommentaire")
     * @ORM\JoinColumn(name="idCommentaire", referencedColumnName="id")
     */


    private $Commentaire;

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->Commentaire;
    }

    /**
     * @param mixed $Commentaire
     */
    public function setCommentaire($Commentaire)
    {
        $this->Commentaire = $Commentaire;
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
}

