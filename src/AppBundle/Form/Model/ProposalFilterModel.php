<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;

class ProposalFilterModel
{

    /**
     * @var int
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
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
    public function getFinancial(): Company
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