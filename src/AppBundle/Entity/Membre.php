<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
Class Membre {
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $description;
    protected $mdp;
    protected $statut;
    protected $confirm;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getMail() {
        return $this->mail;
    }
    function getDescription() {
        return $this->description;
    }

    function getMdp() {
        return $this->mdp;
    }
    function getConfirm() {
        return $this->confirm;
    }
    function getStatut() {
        return $this->statut;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }
    function setDescription($description) {
        $this->description = $description;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }
  
    function setStatut($statut) {
        $this->statut = $statut;
    }
    function setConfirm($confirm) {
        $this->confirm = $confirm;
    }
}
