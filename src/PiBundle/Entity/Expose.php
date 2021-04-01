<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expose
 *
 * @ORM\Table(name="expose")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\ExposeRepository")
 */
class Expose
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
     * @ORM\Column(name="locuteurs", type="string", length=255)
     */
    private $locuteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;


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
     * Set locuteurs
     *
     * @param string $locuteurs
     *
     * @return Expose
     */
    public function setLocuteurs($locuteurs)
    {
        $this->locuteurs = $locuteurs;

        return $this;
    }

    /**
     * Get locuteurs
     *
     * @return string
     */
    public function getLocuteurs()
    {
        return $this->locuteurs;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return Expose
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }
}

