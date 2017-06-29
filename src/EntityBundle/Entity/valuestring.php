<?php

namespace EntityBundle\Entity;

/**
 * valuestring
 */
class valuestring
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idAttribute;

    /**
     * @var int
     */
    private $idEntity;

    /**
     * @var string
     */
    private $value;


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
     * Set idAttribute
     *
     * @param integer $idAttribute
     *
     * @return valuestring
     */
    public function setIdAttribute($idAttribute)
    {
        $this->idAttribute = $idAttribute;
    
        return $this;
    }

    /**
     * Get idAttribute
     *
     * @return integer
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }

    /**
     * Set idEntity
     *
     * @param integer $idEntity
     *
     * @return valuestring
     */
    public function setIdEntity($idEntity)
    {
        $this->idEntity = $idEntity;
    
        return $this;
    }

    /**
     * Get idEntity
     *
     * @return integer
     */
    public function getIdEntity()
    {
        return $this->idEntity;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return valuestring
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}

