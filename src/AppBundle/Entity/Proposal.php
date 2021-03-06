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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agent", inversedBy="proposal")
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
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    protected $remesa;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Calculator",cascade={"remove"}, mappedBy="proposal")
     */
    protected $calculator;

    public function __construct()
    {
        $this->calculator = new ArrayCollection();
        parent::__construct();
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
    public function setCompany($company)
    {
        $this->company = $company;
    }


    /**
     * @return Agent
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param Agent $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
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
     * @return ArrayCollection
     */
    public function getCalculator()
    {
        return $this->calculator;
    }

    /**
     * @param ArrayCollection $calculator
     */
    public function setCalculator($calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @param Calculator $calculator
     */
    public function addCalculator($calculator)
    {
        $this->calculator->add($calculator);
    }


    /**
     * @return bool
     */
    public function getRemesa()
    {
        return $this->remesa;
    }

    /**
     * @param bool $remesa
     */
    public function setRemesa($remesa)
    {
        $this->remesa = $remesa;
    }

}

