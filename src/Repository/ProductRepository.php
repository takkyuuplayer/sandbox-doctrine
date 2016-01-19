<?php
namespace DoctrineTest\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function getProducts($number = 30)
    {
        $dql = "SELECT p FROM products";

        $query = $this->createQueryBuilder('pro');
        return $query->getQuery()->getResult();
    }

}
