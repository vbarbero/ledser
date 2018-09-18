<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Report;
use AppBundle\Form\Model\CalendarFilterModel;
use AppBundle\Form\Model\DraweeRiskFilterModel;
use AppBundle\Model\ProposalModel;
use Doctrine\ORM\EntityRepository;

class CalculatorRepository extends EntityRepository
{
    public function getReportToCalendar($from, $to, $user)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->innerJoin('c.proposal', 'p');
        $qb->where(
            $qb->expr()->between('c.vencimiento', ':date_init', ':date_fin')
        );
        $qb->andWhere($qb->expr()->eq('p.state', ':state'));
        if($user)
        {
            $qb->andWhere($qb->expr()->eq('p.user', ':user'));
            $qb->setParameter('user', $user);

        }
        $to = clone $to;
        $to->modify("-1 seconds");
        $qb->setParameter('date_init', $from->format("Y-m-d H:i:s"));
        $qb->setParameter('date_fin', $to->format("Y-m-d H:i:s"));
        $qb->setParameter('state', ProposalModel::CLOSE);
        $calculators = [];
        /** @var Calculator $calculator */
        foreach ($qb->getQuery()->getResult() as $calculator)
        {
            $calculators[$calculator->getVencimiento()->format('j')][] = $calculator;
        }
        return $calculators;
    }
    public function getReportToCalendarCliente($from, $to, $user)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->innerJoin('c.proposal', 'p');
        $qb->where(
            $qb->expr()->between('c.formalizacion', ':date_init', ':date_fin')
        );
        if($user)
        {
            $qb->andWhere($qb->expr()->eq('p.user', ':user'));
            $qb->setParameter('user', $user);

        }
        $qb->andWhere($qb->expr()->eq('p.state', ':state'));
        $to = clone $to;
        $to->modify("-1 seconds");
        $qb->setParameter('date_init', $from->format("Y-m-d H:i:s"));
        $qb->setParameter('date_fin', $to->format("Y-m-d H:i:s"));
        $qb->setParameter('state', ProposalModel::CLOSE);
        $calculators = [];
        /** @var Calculator $calculator */
        foreach ($qb->getQuery()->getResult() as $calculator)
        {
            $calculators[$calculator->getFormalizacion()->format('j')][$calculator->getProposal()->getId()] = $calculator;
        }
        return $calculators;
    }
    public function getCalculatorsByFilters(DraweeRiskFilterModel $draweeRiskFilterModel)
    {
        $qb = $this->createQueryBuilder('c');
        $qb->innerJoin('c.proposal', 'p');
        $qb->where($qb->expr()->eq('p.state', ':state'));
        $qb->setParameter('state', ProposalModel::CLOSE);
        if($draweeRiskFilterModel->getFinancial())
        {
            $qb->andWhere(
                $qb->expr()->eq('p.finalcial', ":financial")
            );
            $qb->setParameter('financial', $draweeRiskFilterModel->getFinancial());
        }
        if($draweeRiskFilterModel->getDrawee())
        {
            $qb->andWhere(
                $qb->expr()->eq('c.drawee', ":drawee")
            );
            $qb->setParameter('drawee', $draweeRiskFilterModel->getDrawee());
        }
        if($draweeRiskFilterModel->getCompany())
        {
            $qb->andWhere(
                $qb->expr()->eq('p.company', ":company")
            );
            $qb->setParameter('company', $draweeRiskFilterModel->getCompany());
        }
        $qb->orderBy("c.vencimiento", 'DESC');
        return $qb->getQuery()->getResult();
    }
}