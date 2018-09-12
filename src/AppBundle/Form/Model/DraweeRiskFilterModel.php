<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;

class DraweeRiskFilterModel
{
    /**
     * @var \DateTime
     */
    protected $date;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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