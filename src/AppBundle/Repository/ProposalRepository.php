<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Report;
use AppBundle\Form\Model\CalendarFilterModel;
use AppBundle\Form\Model\DraweeRiskFilterModel;
use AppBundle\Form\Model\ProposalFilterModel;
use AppBundle\Model\ProposalModel;
use Doctrine\ORM\EntityRepository;

class ProposalRepository extends EntityRepository
{
    public function getItemsByFilters(ProposalFilterModel $proposalFilterModel)
    {
        $qb = $this->createQueryBuilder('p');
	$qb->innerJoin('p.calculator', 'c');

        if($proposalFilterModel->getStatus())
        {
            $qb->andWhere(
                $qb->expr()->in('c.state', ':p_state')
            );
            $qb->setParameter(':p_state', $proposalFilterModel->getStatus());

        }
        if($proposalFilterModel->getFrom())
        {
            $qb->andWhere(
                $qb->expr()->gte('c.emision', ":from")
            );
            $qb->setParameter('from', $proposalFilterModel->getFrom());
        }
        if($proposalFilterModel->getTo())
        {
            $qb->andWhere(
                $qb->expr()->lte('c.emision', ":to")
            );
            $qb->setParameter('to', $proposalFilterModel->getTo());
        }
        if($proposalFilterModel->getFinancial())
        {
            $qb->andWhere(
                $qb->expr()->eq('p.finalcial', ":financial")
            );
            $qb->setParameter('financial', $proposalFilterModel->getFinancial());
        }
        if($proposalFilterModel->getDrawee())
        {
            $qb->andWhere(
                $qb->expr()->eq('c.drawee', ":drawee")
            );
            $qb->setParameter('drawee', $proposalFilterModel->getDrawee());
        }
        if($proposalFilterModel->getCompany())
        {
            $qb->andWhere(
                $qb->expr()->eq('p.company', ":company")
            );
            $qb->setParameter('company', $proposalFilterModel->getCompany());
        }
        if($proposalFilterModel->getOperationalType())
        {
            $qb->andWhere(
                $qb->expr()->eq('p.operationalType', ":operationalType")
            );
            $qb->setParameter('operationalType', $proposalFilterModel->getOperationalType());
        }
        if($proposalFilterModel->getUser())
        {
            $qb->andWhere(
                $qb->expr()->eq('p.user', ":user")
            );
            $qb->setParameter('user', $proposalFilterModel->getUser());
        }
	    $qb->orderBy('c.emision', 'ASC');
        return $qb->getQuery()->getResult();
    }

    public function getProposalByFilters(DraweeRiskFilterModel $draweeRiskFilterModel)
    {
        $qb = $this->createQueryBuilder('p');
	    $qb->innerJoin('p.calculator', 'c');
        $qb->andWhere(
            $qb->expr()->eq('c.drawee', ":drawee")
        );
        $qb->setParameter('drawee', $draweeRiskFilterModel->getDrawee());
        if($draweeRiskFilterModel->getFinancial())
        {
            $qb->andWhere(
                $qb->expr()->eq('p.finalcial', ":financial")
            );
            $qb->setParameter('financial', $draweeRiskFilterModel->getFinancial());
        }

        $qb->where("p.status", ':p_status');
        $qb->setParameter('p_status', ProposalModel::CLOSE);
	    $qb->orderBy('c.formalizacion', 'ASC');
        return $qb->getQuery()->getResult();
    }



}
