<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musique
 *
 * @ORM\Table(name="musique")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\MusiqueRepository")
 */
class Musique
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
     * @ORM\Column(name="artistes", type="string", length=255)
     */
    private $artistes;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;


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
     * Set artistes
     *
     * @param string $artistes
     *
     * @return Musique
     */
    public function setArtistes($artistes)
    {
        $this->artistes = $artistes;

        return $this;
    }

    /**
     * Get artistes
     *
     * @return string
     */
    public function getArtistes()
    {
        return $this->artistes;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Musique
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
}

