<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProposalRepository")
 * @ORM\Table
 */
class Proposal extends BaseEntity
{
    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company",cascade={"persist"}, inversedBy="proposal")
     */
    private $company;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $state;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company",cascade={"persist"}, inversedBy="proposal")
     */
    protected $finalcial;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company",cascade={"persist"}, inversedBy="proposal")
     */
    protected $drawee;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $rating;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $operationalType;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $reason;

    /**
     * @var Calculator
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Calculator",cascade={"remove"}, mappedBy="proposal")
     */
    protected $calculator;

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
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState($state)
    {
        $this->state = $state;
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
     */
    public function getFinalcial()
    {
        return $this->finalcial;
    }

    /**
     * @param Company $finalcial
     */
    public function setFinalcial(Company $finalcial)
    {
        $this->finalcial = $finalcial;
    }

    /**
     * @return Company
     */
    public function getDrawee(): Company
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

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getOperationalType()
    {
        return $this->operationalType;
    }

    /**
     * @param string $operationalType
     */
    public function setOperationalType($operationalType)
    {
        $this->operationalType = $operationalType;
    }

    /**
     * @return Calculator
     */
    public function getCalculator()
    {
        return $this->calculator;
    }

    /**
     * @param Calculator $calculator
     */
    public function setCalculator($calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }


}

