<?php

namespace EntityBundle\Entity;

/**
 * Borrow
 */
class Borrow
{
    const STATUS_OWNED = 7;
    const STATUS_LOANABLE = 1;
    const STATUS_INTEREST = 2;
    const STATUS_INTEREST_VALID = 3;
    const STATUS_CONFIRMED = 4;
    const STATUS_SENT = 5;
    const STATUS_RETURNED = 6;
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idOwner;

    /**
     * @var int
     */
    private $idLoan;

    /**
     * @var int
     */
    private $idProduct;
    /**
     * @var int
     */
    private $status;


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
     * Set idOwner
     *
     * @param integer $idOwner
     *
     * @return Borrow
     */
    public function setIdOwner($idOwner)
    {
        $this->idOwner = $idOwner;
    
        return $this;
    }

    /**
     * Get idOwner
     *
     * @return integer
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }

    /**
     * Set idLoan
     *
     * @param integer $idLoan
     *
     * @return Borrow
     */
    public function setIdLoan($idLoan)
    {
        $this->idLoan = $idLoan;
    
        return $this;
    }

    /**
     * Get idLoan
     *
     * @return integer
     */
    public function getIdLoan()
    {
        return $this->idLoan;
    }

    /**
     * @return int
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param int $idProduct
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Borrow
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}

