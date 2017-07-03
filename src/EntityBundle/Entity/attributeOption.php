<?php

namespace EntityBundle\Entity;

/**
 * attributeOption
 */
class attributeOption
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $attributeId;

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
     * Set attributeId
     *
     * @param integer $attributeId
     *
     * @return attributeOption
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;
    
        return $this;
    }

    /**
     * Get attributeId
     *
     * @return integer
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return attributeOption
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

