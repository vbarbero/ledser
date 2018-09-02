<?php

namespace AppBundle\Repository;

use AppBundle\Model\CompanyModel;
use Doctrine\ORM\EntityRepository;

class CompanyRepository extends EntityRepository
{
    public function getFinantial()
    {
        $qb = $this->createQueryBuilder('c');
        $qb->where(
                $qb->expr()->eq('c.type', ":type")
            );
        $qb->setParameter('type', CompanyModel::FINANTIAL);
        $qb->orderBy('c.name', 'ASC');
        return $qb;
    }
    public function getDrawee()
    {
        $qb = $this->createQueryBuilder('c');
        $qb->where(
                $qb->expr()->eq('c.type', ":type")
            );
        $qb->setParameter('type', CompanyModel::DRAWEE);
        $qb->orderBy('c.name', 'ASC');
        return $qb->getQuery();
    }
}

