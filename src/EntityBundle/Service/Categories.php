<?php
namespace EntityBundle\Service;

use Doctrine\ORM\EntityManager;
use EntityBundle\Entity\categorie;


class Categories
{
    public $id;
    public $name;
    public $attributes = array();
    public $products = array();


    public function save(EntityManager $em){
        if ($this->id) {
            $categorie = $em->getRepository('EntityBundle:categorie')->findOneBy(["id" => $this->id]);
        } else {
            $categorie = new categorie();
        }
        $categorie->setTitre($this->name);
        $em->persist($categorie);
        $em->flush();
        $array = array();
        foreach ($this->attributes as $data) {
            $array[] = $data->save($em);
        }
        $this->attributes = $array;
        return $this->getById($em, $categorie->getId());

    }
    public function getById(EntityManager $em,$id)
    {
        $categorie = $em->getRepository('EntityBundle:categorie')->findOneBy(["id" => $id]);
        $this->id = $categorie->getId();
        $this->name = $categorie->getTitre();
        $this->attributes = (new Attributes())->getAll($em, $categorie->getId());
        return $this;
    }

    public function getProducts(EntityManager $em){
        $categorie = $em->getRepository('EntityBundle:categorie')->findOneBy(["id" => $this->id]);
        return (new Product())->getByCategory($em,$categorie->getId());

    }
    public function getAll(EntityManager $em)
    {
        $categories = $em->getRepository('EntityBundle:categorie')->findAll();
        $array = array();
        foreach ($categories as $categorie) {
            $array[] = (new Categories())->getById($em, $categorie->getId());
        }
        return $array;
    }
}