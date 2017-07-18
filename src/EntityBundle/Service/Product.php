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

    public function delete(EntityManager $em)
    {
        if ($this->id) {
            $product = $em->getRepository('EntityBundle:entity')->findOneBy(["id" => $this->id]);
            $em->remove($product);
            $em->flush();
        }
        return false;
    }

    public function getValueByName($name = null)
    {
        if ($name == null) {
            return false;
        }
        foreach ($this->data as $attr) {
            if ($attr->name == $name) {
                return $attr->value;
            }
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
        return $this->getById($em, $product->getId());
    }


    public function getById(EntityManager $em, $id)
    {
        $this->id = $id;
        $product = $em->getRepository('EntityBundle:Entity')->findOneBy(["id" => $this->id]);
        $this->name = $product->getCode();
        $this->category = $product->getCategorieId();
        if ($this->id) {
            $this->data = (new Attributes($this->id))->getByCategorie($em, $this->category);
        } else {
            $this->data = (new Attributes())->getAll($em);
        }
        return $this;
    }

    public function getAll(EntityManager $em)
    {
        $products = $em->getRepository('EntityBundle:Entity')->findAll();
        $array = array();
        foreach ($products as $product) {
            $array[] = (new Product())->getById($em, $product->getId());
        }
        return $array;
    }


    public function getAttributeValue(EntityManager $em,$attribute_name)
    {
        foreach ($this->data as $attribute) {
            if ($attribute->name == $attribute_name) {
                return $attribute->value;
            }
        }
    }

    public function getByAttribute(EntityManager $em,$attribue_name, $attribute_value)
    {
        $products = (new Product())->getAll($em);
        $array = array();
        foreach ($products as $product){
            if ($product->getAttributeValue($em,$attribue_name)== $attribute_value){
                $array[] = $product;
            }
        }
        return $array;
    }

    public function getByCategory(EntityManager $em, $categoryId)
    {
        $products = $em->getRepository('EntityBundle:Entity')->findBy(["category_id" => $categoryId]);
        $array = array();
        foreach ($products as $product) {
            $array[] = (new Product())->getById($em, $product->getId());
        }
        return $array;
    }
}