<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEvent
 *
 * @ORM\Table(name="user_event")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\UserEventRepository")
 */
class UserEvent
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
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
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
     * @ORM\Column(name="pointsfidelite", type="integer")
     */
    private $pointsfidelite;


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
     * Set pointsfidelite
     *
     * @param integer $pointsfidelite
     *
     * @return UserEvent
     */
    public function setPointsfidelite($pointsfidelite)
    {
        $this->pointsfidelite = $pointsfidelite;

        return $this;
    }

    /**
     * Get pointsfidelite
     *
     * @return int
     */
    public function getPointsfidelite()
    {
        return $this->pointsfidelite;
    }
}

