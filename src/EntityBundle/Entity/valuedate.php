<?php

namespace EntityBundle\Entity;

/**
 * valuedate
 */
class valuedate
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
     * @var \DateTime
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
     * @return valuedate
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
     * @return valuedate
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
     * @param \DateTime $value
     *
     * @return valuedate
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return \DateTime
     */
    public function getValue()
    {
        return $this->value;
    }
}

