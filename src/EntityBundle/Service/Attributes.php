<?php
namespace EntityBundle\Service;

use DateTime;
use Doctrine\ORM\EntityManager;
use EntityBundle\Entity\attribute;
use EntityBundle\Entity\attributeOption;
use EntityBundle\Entity\valuedate;
use EntityBundle\Entity\valueinteger;
use EntityBundle\Entity\valuetext;


class Attributes
{

    public $id;
    public $productid;
    public $type;
    public $valueid;
    public $value;
    public $name;
    public $data = array();
    public $obligatory;


    public function __construct($productId = null)
    {
        $this->productid = $productId;
        return $this;

    }

    public function save(EntityManager $em, $categorie = null)
    {
        if ($this->id) {
            $attribute = $em->getRepository('EntityBundle:attribute')->findOneBy(["id" => $this->id]);
        } else {
            $attribute = new attribute();
        }
        $attribute->setName($this->name);
        if ($this->productid) {
            $attribute->setCategory($em->getRepository('EntityBundle:Entity')->findOneBy(["id" => $this->productid])->getCategorieId());//
        } else if ($categorie) {
            $attribute->setCategory($categorie);
        } else {
            return false;
        }
        $attribute->setObligatory($this->obligatory);
        switch ($this->type) {
            case "text":
                $attribute->setType(1);
                break;
            case "image":
                $attribute->setType(5);
                break;
            case "select":
                $attribute->setType(2);
                if ($this->id) {
                    $optToAdd = array();
                    foreach ($this->data as $key => $data) {
                        $option = $em->getRepository('EntityBundle:attributeOption')->findBy(["id" => $key]);
                        if (!$option) {
                            $optToAdd[] = $data;
                        }
                    }
                } else {
                    foreach ($this->data as $data) {
                        $optToAdd[] = $data;
                    }
                }
                foreach ($optToAdd as $option) {
                    $attributeOption = new attributeOption();
                    $attributeOption->setValue($data);
                    $em->persist($attributeOption);
                }
                foreach ($em->getRepository('EntityBundle:attributeOption')->findBy(["attributeId" => $this->id]) as $remove) {
                    if (!isset($this->data[$remove->getId()])) {
                        $em->remove($remove);
                    }
                }
                break;
            case "integer":
                $attribute->setType(3);
                break;
            case "date":
                $attribute->setType(4);
                $option = $em->getRepository('EntityBundle:attributeOption')->findOneBy(["attributeId" => $this->id]);
                $option->setValue($this->data);
                $em->persist($option);
                break;
            default:
                break;


        }
        if ($this->productid) {
            switch ($this->type) {
                case "text":
                    $val = $em->getRepository('EntityBundle:valuetext')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val == null) {
                        $val = new valuetext();
                    }
                    $val->setValue($this->value);
                    $val->setIdAttribute($this->id);
                    $val->setIdEntity($this->productid);
                    $em->persist($val);
                    break;
                case "image":
                    $val = $em->getRepository('EntityBundle:valuetext')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val == null) {
                        $val = new valuetext();
                    }
                    if (is_array($this->value)){
                        $upload_dir = "images\\uploads";

                        if (!file_exists($upload_dir)) {
                            mkdir($upload_dir, 0777, true);
                        }
                        $upload_dir = $upload_dir."\\".$this->value["name"];
                        if (file_exists($upload_dir)){
                            $upload_dir .= "_";
                        }
                        move_uploaded_file($this->value["tmp_name"], $upload_dir);
                        $val->setValue("../" . $upload_dir);
                    }
                    $val->setIdAttribute($this->id);
                    $val->setIdEntity($this->productid);
                    $em->persist($val);
                    break;
                case "select":
                    $val = $em->getRepository('EntityBundle:valueinteger')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val == null) {
                        $val = new valueinteger();
                    }
                    $val->setValue($this->value);
                    $val->setIdAttribute($this->id);
                    $val->setIdEntity($this->productid);
                    $em->persist($val);
                    break;
                case "integer":
                    $val = $em->getRepository('EntityBundle:valueinteger')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val == null) {
                        $val = new valueinteger();
                    }

                    $val->setValue($this->value);
                    $val->setIdAttribute($this->id);
                    $val->setIdEntity($this->productid);
                    $em->persist($val);
                    break;
                case "date":
                    if ($this->data) {
                        $val = $em->getRepository('EntityBundle:valuedate')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                        if ($val == null) {
                            $val = new valuedate();
                        }
                        $val->setValue(DateTime::createFromFormat('Y-m-d', $this->value));

                    } else {
                        $val = $em->getRepository('EntityBundle:valueinteger')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                        if ($val == null) {
                            $val = new valueinteger();
                        }
                        $val->setValue( $this->value);

                    }
                    $val->setIdAttribute($this->id);
                    $val->setIdEntity($this->productid);
                    $em->persist($val);                    break;
                default:
                    break;

            }
            $em->persist($val);
        }
        $em->persist($attribute);

        $em->flush();
        return $this->getById($em, $attribute->getId());
    }

    public function getCategorie(EntityManager $em)
    {
        $attributes = $em->getRepository('EntityBundle:attribute')->findOneBy(["id" => $this->id]);
        if ($attributes != null) {
            return $attributes->getCategory();
        }
        return false;
    }

    public function getAll(EntityManager $em, $categorieId = null)
    {
        if ($categorieId != null) {
            $catId = $categorieId;
        }
        if (isset($catId)) {
            $attributes = $em->getRepository('EntityBundle:attribute')->findBy(["category" => $catId]);
        } else {
            $attributes = $em->getRepository('EntityBundle:attribute')->findAll();
        }
        $array = array();
        foreach ($attributes as $attribute) {
            $array[$attribute->getId()] = (new Attributes($this->productid))->getById($em, $attribute->getId());
        }
        return $array;
    }

    public function getById(EntityManager $em, $id)
    {
        $attribute = $em->getRepository('EntityBundle:attribute')->findOneBy(["id" => $id]);
        if ($attribute == null){
            return false;
        }
        $this->id = $attribute->getId();
        $this->name = $attribute->getName();
        $this->obligatory = $attribute->getObligatory();
        switch ($attribute->getType()) {
            case 1:
                $this->type = "text";
                break;
            case 2:
                $this->type = "select";
                $options = $em->getRepository('EntityBundle:attributeOption')->findBy(["attributeId" => $id]);
                foreach ($options as $option) {
                    $this->data[$option->getId()] = $option->getValue();
                }
                break;
            case 3:
                $this->type = "integer";
                break;
            case 4:
                $this->type = "date";
                $option = $em->getRepository('EntityBundle:attributeOption')->findOneBy(["attributeId" => $id]);
                $this->data = $option->getValue();
                break;
            case 5:
                $this->type = "image";
                break;
            default:
                break;
        }
        if ($this->productid) {

            switch ($this->type) {
                case "text":
                    $val = $em->getRepository('EntityBundle:valuetext')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val != null) {
                        $this->value = $val->getValue();
                    }
                    break;
                case "image":
                    $val = $em->getRepository('EntityBundle:valuetext')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val != null) {
                        $this->value = $val->getValue();
                    }
                    break;
                case "select":
                    $val = $em->getRepository('EntityBundle:valueinteger')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val != null) {
                        $this->valueid = $val->getId();
                        $this->value = $val->getValue();
                    }
                    break;
                case "integer":
                    $val = $em->getRepository('EntityBundle:valueinteger')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    if ($val != null) {
                        $this->value = $val->getValue();
                    }
                    break;
                case "date":
                    if ($this->data) {
                        $val = $em->getRepository('EntityBundle:valuedate')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    } else {
                        $val = $em->getRepository('EntityBundle:valueinteger')->findOneBy(["idAttribute" => $this->id, "idEntity" => $this->productid]);
                    }
                    if ($val != null) {
                        $this->value = $val->getValue()->format('Y-m-d');
                    }
                    break;
                default:
                    break;

            }
        }
        return $this;
    }
    public function createDefaultAttributes(EntityManager $em, $id)
    {
        $defaults = [
            [
                "name" => "titre",
                "type" => "text",
            ],
            [
                "name" => "description",
                "type" => "text",
            ],
            [
                "name" => "image",
                "type" => "image",
            ],
            [
                "name" => "front",
                "type" => "integer",
            ],
        ];
        foreach ($defaults as $default) {
            $attributes = $this->getByCategorie($em, $id);
            $create = true;
            foreach ($attributes as $attribute) {
                if ($attribute->name == $default["name"]) {
                    $create = false;
                    continue;
                }
            }
            if ($create) {
                $new = new Attributes();
                foreach ($default as $key => $element) {
                    $new->$key = $element;
                }
                $new->obligatory = false;
                $new->save($em, $id);
            }

        }


    }
    public function getByCategorie(EntityManager $em, $id_categorie)
    {
        $attributes = $em->getRepository('EntityBundle:attribute')->findBy(["category" => $id_categorie]);
        $array = array();
        foreach ($attributes as $attribute) {
            $array[] = (new Attributes($this->productid))->getById($em, $attribute->getId());
        }
        return $array;
    }

}