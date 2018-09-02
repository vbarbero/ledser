<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 * @ORM\Table
 */
class Company extends BaseEntity
{
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $cif;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $name;

    /**
     * @var int
     *
     * @ORM\Column(type="integer" , options={"default" : 0}, nullable=true )
     */
    protected $zip;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $addressNumber;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $province;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $cnae;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $type;

    /**
     * @var Contact
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Contact",cascade={"remove"}, mappedBy="company")
     */
    protected $contact;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Contact",cascade={"remove"}, mappedBy="company")
     */
    protected $files;

    /**
     * @var Contact
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Proposal",cascade={"remove"}, mappedBy="company")
     */
    protected $proposal;

    /**
     * @var Report
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Report",cascade={"remove"}, mappedBy="company")
     */
    protected $report;

    public function __construct()
    {
	parent::__construct();
        $this->files = new ArrayCollection();
	$this->zip = 0;
    }


    /**
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * @param string $cif
     */
    public function setCif($cif)
    {
        $this->cif = $cif;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * @return string
     */
    public function getCnae()
    {
        return $this->cnae;
    }

    /**
     * @param string $cnae
     */
    public function setCnae($cnae)
    {
        $this->cnae = $cnae;
    }

    /**
     * @return bool
     */
    public function isType()
    {
        return $this->type;
    }

    /**
     * @param bool $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * @param string $addressNumber
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return ArrayCollection
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param ArrayCollection $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }

    /**
     * @param ArrayCollection $files
     */
    public function addFile($file)
    {
        $this->files = $files;
    }



    /**
     * @return Contact
     */
    public function getProposal()
    {
        return $this->proposal;
    }

    /**
     * @param Contact $proposal
     */
    public function setProposal($proposal)
    {
        $this->proposal = $proposal;
    }

    /**
     * @return Report
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @param Report $report
     */
    public function setReport($report)
    {
        $this->report = $report;
    }



}
