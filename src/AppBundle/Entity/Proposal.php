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
     * @var Agent
     * @ORM\Column(nullable=true)
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Agent")
     */
    private $agent;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="proposal")
     */
    private $user;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company",cascade={"persist"}, inversedBy="proposal")
     */
    protected $finalcial;


    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $operationalType;

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
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
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


}

