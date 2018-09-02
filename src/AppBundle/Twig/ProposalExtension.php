<?php

namespace AppBundle\Twig;

use AppBundle\Model\ProposalModel;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service
 * @DI\Tag("twig.extension")
 */
class ProposalExtension extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('proposal_status', [$this, 'getStatus']),
            new \Twig_SimpleFilter('proposal_type', [$this, 'getType']),
        ];
    }

    public function getStatus($status)
    {
        $states = ProposalModel::getState();
        return $states[$status];
    }

    public function getType($type)
    {
        $types = ProposalModel::getType();
        return $types[$type];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_proposal_extension';
    }
}
