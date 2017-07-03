<?php

namespace EntityBundle\Entity;

/**
 * attribute
 */
class attribute
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $type;
    /**
     * @var int
     */
    private $category;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $obligatory;


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
     * Set type
     *
     * @param integer $type
     *
     * @return attribute
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return attribute
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set obligatory
     *
     * @param boolean $obligatory
     *
     * @return attribute
     */
    public function setObligatory($obligatory)
    {
        $this->obligatory = $obligatory;
    
        return $this;
    }

    /**
     * Get obligatory
     *
     * @return boolean
     */
    public function getObligatory()
    {
        return $this->obligatory;
    }
}

