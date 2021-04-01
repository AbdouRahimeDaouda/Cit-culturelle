<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="PiBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="C_signal", type="integer")
     */
    private $cSignal;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="Commentaire")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private $Article;

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->Article;
    }

    /**
     * @param mixed $Article
     */
    public function setArticle($Article)
    {
        $this->Article = $Article;
    }

    /**
     * @return mixed
     */
    public function getFSujet()
    {
        return $this->F_sujet;
    }

    /**
     * @param mixed $F_sujet
     */
    public function setFSujet($F_sujet)
    {
        $this->F_sujet = $F_sujet;
    }


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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Commentaire
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Commentaire
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set cSignal
     *
     * @param integer $cSignal
     *
     * @return Commentaire
     */
    public function setCSignal($cSignal)
    {
        $this->cSignal = $cSignal;

        return $this;
    }

    /**
     * Get cSignal
     *
     * @return int
     */
    public function getCSignal()
    {
        return $this->cSignal;
    }
}

