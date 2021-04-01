<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

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
     * @ORM\Column(name="acteurs", type="string", length=255)
     */
    private $acteurs;


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
     * Set duree
     *
     * @param integer $duree
     *
     * @return Film
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Film
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
     * @return Film
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
     * @return Film
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
     * Set acteurs
     *
     * @param string $acteurs
     *
     * @return Film
     */
    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;

        return $this;
    }

    /**
     * Get acteurs
     *
     * @return string
     */
    public function getActeurs()
    {
        return $this->acteurs;
    }
}

