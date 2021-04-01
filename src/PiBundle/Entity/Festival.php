<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Festival
 *
 * @ORM\Table(name="festival")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\FestivalRepository")
 */
class Festival
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="participants", type="string", length=255)
     */
    private $participants;

    /**
     * @var string
     *
     * @ORM\Column(name="typeFestival", type="string", length=255)
     */
    private $typeFestival;

    /**
     * @var string
     *
     * @ORM\Column(name="genreFestival", type="string", length=255)
     */
    private $genreFestival;


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
     * Set participants
     *
     * @param string $participants
     *
     * @return Festival
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * Get participants
     *
     * @return string
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set typeFestival
     *
     * @param string $typeFestival
     *
     * @return Festival
     */
    public function setTypeFestival($typeFestival)
    {
        $this->typeFestival = $typeFestival;

        return $this;
    }

    /**
     * Get typeFestival
     *
     * @return string
     */
    public function getTypeFestival()
    {
        return $this->typeFestival;
    }

    /**
     * Set genreFestival
     *
     * @param string $genreFestival
     *
     * @return Festival
     */
    public function setGenreFestival($genreFestival)
    {
        $this->genreFestival = $genreFestival;

        return $this;
    }

    /**
     * Get genreFestival
     *
     * @return string
     */
    public function getGenreFestival()
    {
        return $this->genreFestival;
    }
}

