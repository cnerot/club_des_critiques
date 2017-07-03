<?php
namespace EntityBundle\Service;

use Doctrine\ORM\EntityManager;
use EntityBundle\Entity\Entity;

class Product
{

    public $id;
    public $name;
    public $category;
    public $data = array();
    public function delete(EntityManager $em){
        if ($this->id) {
            $product = $em->getRepository('EntityBundle:entity')->findOneBy(["id" => $this->id]);
            $em->remove($product);
            $em->flush();
        }
        return false;
    }
    public function save(EntityManager $em, $attributes = true)
    {
        if ($this->id) {
            $product = $em->getRepository('EntityBundle:entity')->findOneBy(["id" => $this->id]);
        } else {
            $product = new Entity();
        }
        $product->setCode($this->name);
        $product->setCategorieId($this->category);
        $em->persist($product);
        $em->flush();
        if ($attributes) {
            $array = array();
            foreach ($this->data as $data) {
                $array[] = $data->save($em);
            }
            $this->data = $array;
        }
        return $this->getById($em,$product->getId());
    }



    public function getById(EntityManager $em, $id)
    {
        $this->id = $id;
        $product = $em->getRepository('EntityBundle:Entity')->findOneBy(["id" => $this->id]);
        $this->name = $product->getCode();
        $this->category = $product->getCategorieId();
        if ($this->id) {
            $this->data = (new Attributes($this->id))->getAll($em);
        }else {
            $this->data = (new Attributes())->getAll($em);
        }
        return $this;
    }

    public function getAll(EntityManager $em)
    {
        $products = $em->getRepository('EntityBundle:Entity')->findAll();
        $array = array();
        foreach ($products as $product) {
            $array[] = (new Product())->getById($em,$product->getId());
        }
        return $array;
    }

    public function getByCategory(EntityManager $em, $categoryId)
    {
        $products = $em->getRepository('EntityBundle:Entity')->findBy(["category_id" => $categoryId]);
        $array = array();
        foreach ($products as $product) {
            $array[] = (new Product())->getById($em,$product->getId());
        }
        return $array;

    }
}