<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;

class ProposalFilterModel
{

    /**
     * @var ArrayCollection
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $from;

    /**
     * @var \DateTime
     */
    protected $to;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var int
     */
    protected $operationalType;

    /**
     * @var Company
     */
    protected $financial;

    /**
     * @var Company
     */
    protected $company;

    public function __construct()
    {
        $this->status = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getStatus(): ArrayCollection
    {
        return $this->status;
    }

    /**
     * @param ArrayCollection $status
     */
    public function setStatus(ArrayCollection $status)
    {
        $this->status = $status;
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->from;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->from = $date;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOperationalType()
    {
        return $this->operationalType;
    }

    /**
     * @param int $operationalType
     */
    public function setOperationalType($operationalType)
    {
        $this->operationalType = $operationalType;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param \DateTime $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param \DateTime $to
     */
    public function setTo($to)
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


}