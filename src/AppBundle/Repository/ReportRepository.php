<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Report;
use AppBundle\Form\Model\CalendarFilterModel;
use Doctrine\ORM\EntityRepository;

class ReportRepository extends EntityRepository
{
    public function getItemsByFilters(CalendarFilterModel $calendarFilterModel)
    {
        $qb = $this->createQueryBuilder('r');
        $company = false;

        if($calendarFilterModel->getCif())
        {
            $qb->join('r.company', 'c');
            $qb->andWhere(
                $qb->expr()->eq('c.cif', ':c_cif')
            );
            $company = true;
            $qb->setParameter(':c_cif', $calendarFilterModel->getCif()->getCif());

        } elseif($calendarFilterModel->getCompany())
        {
            $qb->join('r.company', 'c');
            $qb->andWhere(
                $qb->expr()->eq('c.name', ":c_name")
            );
            $company = true;
            $qb->setParameter(':c_name', $calendarFilterModel->getCompany()->getName());
        }
        if($calendarFilterModel->getActionType())
        {
            $qb->andWhere(
                $qb->expr()->eq('r.action', ":action")
            );
            $qb->setParameter('action', $calendarFilterModel->getActionType());
        }
        if($calendarFilterModel->getDateFrom() && $calendarFilterModel->getDateTo())
        {
            $qb->andWhere(
                $qb->expr()->between('r.date', ':date_init', ':date_fin')
            );
            $qb->setParameter('date_init', $calendarFilterModel->getDateFrom()->format("Y-m-d") . ' 00:00:00');
            $qb->setParameter('date_fin', $calendarFilterModel->getDateTo()->format("Y-m-d") . ' 23:59:59');
        }
        elseif($calendarFilterModel->getDateFrom())
        {
            $qb->andWhere(
                $qb->expr()->gte('r.date', ':date_init')
            );
            $qb->setParameter('date_init', $calendarFilterModel->getDateFrom()->format("Y-m-d") . ' 00:00:00');
        }
        elseif($calendarFilterModel->getDateTo())
        {
            $qb->andWhere(
                $qb->expr()->lte('r.date', ':date_fin')
            );
            $qb->setParameter('date_fin', $calendarFilterModel->getDateTo()->format("Y-m-d") . ' 23:59:59');
        }
        if(!is_null($calendarFilterModel->isDone()))
        {
            $qb->andWhere(
                $qb->expr()->eq('r.done', ":done")
            );
            $qb->setParameter('done', $calendarFilterModel->isDone());
        }
        if($calendarFilterModel->getUser())
        {
            $qb->andWhere(
                $qb->expr()->eq('r.user', ":user")
            );
            $qb->setParameter('user', $calendarFilterModel->getUser());
        }
        if($calendarFilterModel->getPhone())
        {
            if(!$company)
            {
                $qb->join('r.company', 'c');
            }
            $qb->join('c.contact', 'con');
            $qb->andWhere(
                $qb->expr()->eq('con.phone', ":phone")
            );
            $company = true;
            $qb->setParameter('phone', $calendarFilterModel->getPhone());
        }
        if($calendarFilterModel->getClientType())
        {
            if(!$company)
            {
                $qb->join('r.company', 'c');
            }
            $qb->andWhere(
                $qb->expr()->eq('c.clientType', ":client_type")
            );
            $company = true;
            $qb->setParameter('client_type', $calendarFilterModel->getClientType());
        }
        if($calendarFilterModel->getProvince())
        {
            if(!$company)
            {
                $qb->join('r.company', 'c');
            }
            $qb->andWhere(
                $qb->expr()->eq('c.province', ":province")
            );
            $company = true;
            $qb->setParameter('province', $calendarFilterModel->getProvince());
        }
        if($calendarFilterModel->getZip())
        {
            if(!$company)
            {
                $qb->join('r.company', 'c');
            }
            $qb->andWhere(
                $qb->expr()->eq('c.zip', ":zip")
            );
            $company = true;
            $qb->setParameter('zip', $calendarFilterModel->getZip());
        }

        $qb->orderBy('r.date', 'ASC');

        return $qb->getQuery()->getResult();
    }

    public function getReportToCalendar($user, $from, $to)
    {
        $qb = $this->createQueryBuilder('r');
        $qb->where(
            $qb->expr()->between('r.date', ':date_init', ':date_fin')
        );
        $qb->andWhere(
            $qb->expr()->eq('r.user', ":user")
        );
        $qb->andWhere(
            $qb->expr()->eq('r.done', ":done")
        );
        $qb->setParameter('done', 0);

        $to = clone $to;
        $to->modify("-1 seconds");
        $qb->setParameter('date_init', $from->format("Y-m-d H:i:s"));
        $qb->setParameter('date_fin', $to->format("Y-m-d H:i:s"));
        $reports = [];
        /** @var Report $report */
        foreach ($qb->getQuery()->getResult() as $report)
        {
            $reports[$report->getDate()->format('j')][] = $report;
        }
        return $reports;
    }
}