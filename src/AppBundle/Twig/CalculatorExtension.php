<?php

namespace AppBundle\Twig;

use AppBundle\Model\CalculatorModel;
use AppBundle\Model\ProposalModel;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service
 * @DI\Tag("twig.extension")
 */
class CalculatorExtension extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('calculator_status', [$this, 'getStatus']),
        ];
    }

    public function getStatus($status)
    {
        $states = CalculatorModel::getState();
        return $states[$status];
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'app_calculator_extension';
    }
}
