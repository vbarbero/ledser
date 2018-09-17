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
            new \Twig_SimpleFilter('company_facturacion', [$this, 'getType']),
            new \Twig_SimpleFilter('company_cliente', [$this, 'getCliente']),
            new \Twig_SimpleFilter('company_si_no', [$this, 'getSiNo']),
            new \Twig_SimpleFilter('company_plazo', [$this, 'getPlazo']),
            new \Twig_SimpleFilter('company_medio_cobro', [$this, 'getMedioCobro']),
        ];
    }
    public function getType($type)
    {
        return  CompanyModel::getType($type);
    }
    public function getFacturacion($type)
    {
        return CompanyModel::getFacturacion($type);
    }
    public function getCliente($type)
    {
        return CompanyModel::getCliente($type);
    }
    public function getSiNo($type)
    {
        return CompanyModel::getSiNo($type);
    }
    public function getPlazo($type)
    {
        return CompanyModel::getPlazo($type);
    }
    public function getMedioCobro($type)
    {
        return CompanyModel::getMedioCobro($type);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_company_extension';
    }
}
