<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CalculatorRepository")
 * @ORM\Table
 */
class Calculator extends BaseEntity
{

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $formalizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $vencimiento;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $dias;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $nominal;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $honorarios;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $timbres;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $omf;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $mensajeria;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $burofax;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $gastos;

    /**
     * @var Cost
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Cost",cascade={"persist", "remove"})
     */
    protected $costeFinanciero;

    /**
     * @var Cost
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Cost",cascade={"persist", "remove"})
     */
    protected $costeFinancieroLedser;

    /**
     * @var Cost
     *
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Cost",cascade={"persist", "remove"})
     */
    protected $costeTotal;

    /**
     * @var Proposal
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Proposal", inversedBy="calculator")
     */
    private $proposal;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company",cascade={"persist"}, inversedBy="proposal")
     */
    protected $drawee;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $reason;


    /**
     * @return \DateTime
     */
    public function getFormalizacion()
    {
        return $this->formalizacion;
    }

    /**
     * @param \DateTime $formalizacion
     */
    public function setFormalizacion($formalizacion)
    {
        $this->formalizacion = $formalizacion;
    }

    /**
     * @return \DateTime
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }

    /**
     * @param \DateTime $vencimiento
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;
    }

    /**
     * @return int
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * @param int $dias
     */
    public function setDias($dias)
    {
        $this->dias = $dias;
    }

    /**
     * @return float
     */
    public function getNominal()
    {
        return $this->nominal;
    }

    /**
     * @param float $nominal
     */
    public function setNominal($nominal)
    {
        $this->nominal = $nominal;
    }

    /**
     * @return Cost
     */
    public function getCosteFinanciero()
    {
        return $this->costeFinanciero;
    }

    /**
     * @param Cost $costeFinanciero
     */
    public function setCosteFinanciero($costeFinanciero)
    {
        $this->costeFinanciero = $costeFinanciero;
    }

    /**
     * @return Cost
     */
    public function getCosteFinancieroLedser()
    {
        return $this->costeFinancieroLedser;
    }

    /**
     * @param Cost $costeFinancieroLedser
     */
    public function setCosteFinancieroLedser($costeFinancieroLedser)
    {
        $this->costeFinancieroLedser = $costeFinancieroLedser;
    }

    /**
     * @return Cost
     */
    public function getCosteTotal()
    {
        return $this->costeTotal;
    }

    /**
     * @param Cost $costeTotal
     */
    public function setCosteTotal($costeTotal)
    {
        $this->costeTotal = $costeTotal;
    }

    /**
     * @return float
     */
    public function getHonorarios()
    {
        return $this->honorarios;
    }

    /**
     * @param float $honorarios
     */
    public function setHonorarios($honorarios)
    {
        $this->honorarios = $honorarios;
    }

    /**
     * @return float
     */
    public function getTimbres()
    {
        return $this->timbres;
    }

    /**
     * @param float $timbres
     */
    public function setTimbres($timbres)
    {
        $this->timbres = $timbres;
    }

    /**
     * @return float
     */
    public function getOmf()
    {
        return $this->omf;
    }

    /**
     * @param float $omf
     */
    public function setOmf($omf)
    {
        $this->omf = $omf;
    }

    /**
     * @return float
     */
    public function getMensajeria()
    {
        return $this->mensajeria;
    }

    /**
     * @param float $mensajeria
     */
    public function setMensajeria($mensajeria)
    {
        $this->mensajeria = $mensajeria;
    }

    /**
     * @return float
     */
    public function getBurofax()
    {
        return $this->burofax;
    }

    /**
     * @param float $burofax
     */
    public function setBurofax($burofax)
    {
        $this->burofax = $burofax;
    }

    /**
     * @return float
     */
    public function getGastos()
    {
        return $this->gastos;
    }

    /**
     * @param float $gastos
     */
    public function setGastos($gastos)
    {
        $this->gastos = $gastos;
    }

    /**
     * @return Proposal
     */
    public function getProposal()
    {
        return $this->proposal;
    }

    /**
     * @param Proposal $proposal
     */
    public function setProposal($proposal)
    {
        $this->proposal = $proposal;
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
    public function setState(int $state)
    {
        $this->state = $state;
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