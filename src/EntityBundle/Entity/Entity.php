<?php

namespace EntityBundle\Entity;
/**
 * entity
 */
class Entity
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $category_id;

    /**
     * @var string
     */
    private $code;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return entity
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getCategorieId()
    {
        return $this->category_id;
    }

    /**
     * @param int $categorie_id
     */
    public function setCategorieId($category_id)
    {
        $this->category_id = $category_id;
    }
}

