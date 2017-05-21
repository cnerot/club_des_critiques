<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParticipantRepository")
 */
class Participant
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
     * @ORM\Column(name="id_salon", type="integer", length=11)
     */
    private $id_salon;

    /**
     * @var int
     *
     * @ORM\Column(name="id_membre", type="integer", length=11)
     */
    private $id_membre;


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
     * Set idSalon
     *
     * @param integer $idSalon
     *
     * @return Participant
     */
    public function setIdSalon($idSalon)
    {
        $this->id_salon = $idSalon;

        return $this;
    }

    /**
     * Get idSalon
     *
     * @return int
     */
    public function getIdSalon()
    {
        return $this->id_salon;
    }

    /**
     * Set idMembre
     *
     * @param integer $idMembre
     *
     * @return Participant
     */
    public function setIdMembre($idMembre)
    {
        $this->id_membre = $idMembre;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return \membre
     */
    public function getIdMembre()
    {
        return $this->id_membre;
    }
}

