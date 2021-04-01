<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvenementEvaluation
 *
 * @ORM\Table(name="evenementevaluation")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\EvenementEvaluationRepository")
 */
class EvenementEvaluation
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
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="Evenement", inversedBy="EvenementEvaluation")
     * @ORM\JoinColumn(name="evenement_id", referencedColumnName="id")
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
     * Set note
     *
     * @param integer $note
     *
     * @return EvenementEvaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }
}

