<?php

namespace AppBundle\Twig;

use AppBundle\Model\CompanyModel;
use AppBundle\Model\ProposalModel;
use AppBundle\Model\ReportModel;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service
 * @DI\Tag("twig.extension")
 */
class CompanyExtension extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('company_type', [$this, 'getType']),
        ];
    }
    public function getType($type)
    {
        $types = CompanyModel::getType();
        return $types[$type];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_company_extension';
    }
}
