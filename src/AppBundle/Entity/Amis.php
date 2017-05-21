<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Amis
 *
 * @ORM\Table(name="amis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AmisRepository")
 */
class Amis
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
     * @ORM\Column(name="id_membre1", type="integer", length=11)
     */
    private $id_membre1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_membre2", type="integer", length=11)
     */
    private $id_membre2;


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
     * Set idMembre1
     *
     * @param integer $idMembre1
     *
     * @return Amis
     */
    public function setIdMembre1($idMembre1)
    {
        $this->id_membre1 = $idMembre1;

        return $this;
    }

    /**
     * Get idMembre1
     *
     * @return int
     */
    public function getIdMembre1()
    {
        return $this->id_membre1;
    }

    /**
     * Set idMembre2
     *
     * @param integer $idMembre2
     *
     * @return Amis
     */
    public function setIdMembre2($idMembre2)
    {
        $this->id_membre2 = $idMembre2;

        return $this;
    }

    /**
     * Get idMembre2
     *
     * @return int
     */
    public function getIdMembre2()
    {
        return $this->id_membre2;
    }
}

