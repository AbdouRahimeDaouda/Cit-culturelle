<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\FormationRepository")
 */
class Formation
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
     * @return Formation
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
     * @return Formation
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

