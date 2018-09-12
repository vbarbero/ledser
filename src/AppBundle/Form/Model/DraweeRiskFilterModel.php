<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;

class DraweeRiskFilterModel
{
    /**
     * @var \DateTime
     */
    protected $from;

    /**
     * @var \DateTime
     */
    protected $to;

    /**
     * @var Company
     */
    protected $financial;

    /**
     * @var Company
     */
    protected $drawee;

    /**
     * @return \DateTime
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }

    /**
     * @param \DateTime $from
     */
    public function setFrom(\DateTime $from)
    {
        $this->from = $from;
    }

    /**
     * @return \DateTime
     */
    public function getTo(): \DateTime
    {
        return $this->to;
    }

    /**
     * @param \DateTime $to
     */
    public function setTo(\DateTime $to)
    {
        $this->to = $to;
    }

    /**
     * @return Company
     */
    public function getFinancial()
    {
        return $this->financial;
    }

    /**
     * @param Company $financial
     */
    public function setFinancial(Company $financial)
    {
        $this->financial = $financial;
    }

    /**
     * @return Company
     */
    public function getDrawee()
    {
        return $this->drawee;
    }

    /**
     * @param Company $drawee
     */
    public function setDrawee(Company $drawee)
    {
        $this->drawee = $drawee;
    }
}