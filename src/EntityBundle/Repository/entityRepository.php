<?php

namespace EntityBundle\Repository;

/**
 * entityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class entityRepository extends \Doctrine\ORM\EntityRepository
{
    const TYPE_TEXT = 1;
    const TYPE_SELECT = 2;
    const TYPE_NUMBER = 3;
    const TYPE_DATE = 4;

    public function getAttributes($category = null){
        if ($category)
            return $this->getEntityManager()->getRepository('EntityBundle:attribute')->findBy(["category"=>$category->getId()]);
        return false;
    }
}
