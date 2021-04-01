<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theatre
 *
 * @ORM\Table(name="theatre")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\TheatreRepository")
 */
class Theatre
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
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee_sortie", type="date")
     */
    private $anneeSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="realisateurs", type="string", length=255)
     */
    private $realisateurs;

    /**
     * @var string
     *
     * @ORM\Column(name="auteurs", type="string", length=255)
     */
    private $auteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="artistes", type="string", length=255)
     */
    private $artistes;


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
     * Set genre
     *
     * @param string $genre
     *
     * @return Theatre
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
     * Set anneeSortie
     *
     * @param \DateTime $anneeSortie
     *
     * @return Theatre
     */
    public function setAnneeSortie($anneeSortie)
    {
        $this->anneeSortie = $anneeSortie;

        return $this;
    }

    /**
     * Get anneeSortie
     *
     * @return \DateTime
     */
    public function getAnneeSortie()
    {
        return $this->anneeSortie;
    }

    /**
     * Set realisateurs
     *
     * @param string $realisateurs
     *
     * @return Theatre
     */
    public function setRealisateurs($realisateurs)
    {
        $this->realisateurs = $realisateurs;

        return $this;
    }

    /**
     * Get realisateurs
     *
     * @return string
     */
    public function getRealisateurs()
    {
        return $this->realisateurs;
    }

    /**
     * Set auteurs
     *
     * @param string $auteurs
     *
     * @return Theatre
     */
    public function setAuteurs($auteurs)
    {
        $this->auteurs = $auteurs;

        return $this;
    }

    /**
     * Get auteurs
     *
     * @return string
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }

    /**
     * Set artistes
     *
     * @param string $artistes
     *
     * @return Theatre
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
}

