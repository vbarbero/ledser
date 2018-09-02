<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;

class CalendarFilterModel
{

    /**
     * @var Company
     */
    protected $cif;

    /**
     * @var Company
     */
    protected $company;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var \DateTime
     */
    protected $dateFrom;

    /**
     * @var \DateTime
     */
    protected $dateTo;

    /**
     * @var bool
     */
    protected $done;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var int
     */
    protected $clientType;

    /**
     * @var string
     */
    protected $actionType;

    /**
     * @var string
     */
    protected $province;

    /**
     * @var int
     */
    protected $zip;

    /**
     * @var int
     */
    protected $city;

    /**
     * @return Company
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * @param Company $cif
     */
    public function setCif($cif)
    {
        $this->cif = $cif;
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
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param \DateTime $dateFrom
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param \DateTime $dateTo
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @param int $clientType
     */
    public function setClientType($clientType)
    {
        $this->clientType = $clientType;
    }

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * @param string $actionType
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
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
     * @return int
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param int $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


}