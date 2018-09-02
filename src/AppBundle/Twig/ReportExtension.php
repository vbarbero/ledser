<?php

namespace AppBundle\Twig;

use AppBundle\Model\ProposalModel;
use AppBundle\Model\ReportModel;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service
 * @DI\Tag("twig.extension")
 */
class ReportExtension extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('report_action', [$this, 'getAction']),
            new \Twig_SimpleFilter('report_client_type', [$this, 'getClientType']),
        ];
    }

    public function getAction($status)
    {
        $states = ReportModel::getAction();
        return $states[$status];
    }

    public function getClientType($type)
    {
        $types = ReportModel::getClientType();
        return $types[$type];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_report_extension';
    }
}
