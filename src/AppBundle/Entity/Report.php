<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReportRepository")
 * @ORM\Table
 */
class Report extends BaseEntity
{
    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company", cascade={"remove", "persist"}, inversedBy="report")
     * @ORM\JoinColumn(referencedColumnName="id", nullable=true)
     */
    private $company;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $action;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    protected $user;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $done;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $report;

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
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
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
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return bool
     */
    public function isDone()
    {
        return $this->done;
    }

    /**
     * @param bool $done
     */
    public function setDone($done)
    {
        $this->done = $done;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @return int
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param int $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @param string $report
     */
    public function setReport($report)
    {
        $this->report = $report;
    }
}