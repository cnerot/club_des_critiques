<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre", type="string", length=250)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=250)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="urlVendeur", type="string", length=250)
     */
    private $urlVendeur;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer", length=1)
     */
    private $statut;

    /**
     * @var int
     *
     * @ORM\Column(name="laune", type="integer", length=1)
     */
    private $laune;

    /**
     * @var int
     *
     * @ORM\Column(name="idMembre", type="integer", length=11)
     */
    private $idMembre;

    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer", length=11)
     */
    private $idCategorie;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Article
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set urlVendeur
     *
     * @param string $urlVendeur
     *
     * @return Article
     */
    public function setUrlVendeur($urlVendeur)
    {
        $this->urlVendeur = $urlVendeur;

        return $this;
    }

    /**
     * Get urlVendeur
     *
     * @return string
     */
    public function getUrlVendeur()
    {
        return $this->urlVendeur;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return Article
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return int
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set laune
     *
     * @param integer $laune
     *
     * @return Article
     */
    public function setLaune($laune)
    {
        $this->laune = $laune;

        return $this;
    }

    /**
     * Get laune
     *
     * @return int
     */
    public function getLaune()
    {
        return $this->laune;
    }

    /**
     * Set idMembre
     *
     * @param integer $idMembre
     *
     * @return Article
     */
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return int
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     *
     * @return Article
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return int
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }
}

