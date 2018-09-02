<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Report;
use AppBundle\Form\Model\CalendarFilterModel;
use Doctrine\ORM\EntityRepository;

class CalculatorRepository extends EntityRepository
{
    public function getReportToCalendar($from, $to)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->where(
            $qb->expr()->between('c.vencimiento', ':date_init', ':date_fin')
        );
        $to->modify("-1 seconds");
        $qb->setParameter('date_init', $from->format("Y-m-d H:i:s"));
        $qb->setParameter('date_fin', $to->format("Y-m-d H:i:s"));
        $calculators = [];
        /** @var Calculator $calculator */
        foreach ($qb->getQuery()->getResult() as $calculator)
        {
            $calculators[$calculator->getVencimiento()->format('j')][] = $calculator;
        }
        return $calculators;
    }
}