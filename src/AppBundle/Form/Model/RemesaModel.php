<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;

class RemesaModel
{
    /**
     * @var int
     */
    protected $state;

    /**
     * @var \DateTime
     */
    protected $emision;

    /**
     * @var bool
     */
    protected $notice;

    /**
     * @var string
     */
    protected $noticeMessage;
    /**
     * @var float
     */
    protected $honorarios;
    /**
     * @var float
     */
    protected $extra;
    /**
     * @var float
     */
    protected $nominal;

    /**
     * @var float
     */
    protected $omf;

    /**
     * @var float
     */
    protected $mensajeria;

    /**
     * @var float
     */
    protected $burofax;

    /**
     * @var float
     */
    protected $gastos;

    /**
     * @var Proposal
     */
    private $proposal;

    /**
     * @var string
     */
    protected $reason;

    /**
     * @var float
     */
    protected $costeFinancieroTotal;

    /**
     * @var float
     */
    protected $costeFinancieroTae;

    /**
     * @var float
     */
    protected $costeFinancieroMensual;

    /**
     * @var float
     */
    protected $costeFinancieroCoste;

    /**
     * @var float
     */
    protected $costeFinancieroLiquido;

    /**
     * @var float
     */
    protected $costeFinancieroLedserTotal;

    /**
     * @var float
     */
    protected $costeFinancieroLedserTae;

    /**
     * @var float
     */
    protected $costeFinancieroLedserMensual;

    /**
     * @var float
     */
    protected $costeFinancieroLedserCoste;

    /**
     * @var float
     */
    protected $costeFinancieroLedserLiquido;

    /**
     * @var float
     */
    protected $costeTotalTotal;

    /**
     * @var float
     */
    protected $costeTotalTae;

    /**
     * @var float
     */
    protected $costeTotalMensual;

    /**
     * @var float
     */
    protected $costeTotalCoste;

    /**
     * @var float
     */
    protected $costeTotalLiquido;

    /**
     * @var float
     */
    protected $totalNominal;

    /**
     * @var int
     */
    protected $mediaDias;

    /**
     * @var float
     */
    protected $mediaTae;

    /**
     * @var float
     */
    protected $totalCosteFinanciero;

    /**
     * @var float
     */
    protected $totalTimbres;

    /**
     * @var float
     */
    protected $totalCoste;

    /**
     * @var ArrayCollection
     */
    protected $calculadora;

    public function __construct()
    {
        $this->calculadora =  new ArrayCollection();
        $this->totalCoste =  0;
        $this->mediaDias =  0;
        $this->mediaTae =  0;
        $this->totalCosteFinanciero =  0;
        $this->totalTimbres =  0;
        $this->totalCoste =  0;
        $this->omf =  0;
        $this->mensajeria =  0;
        $this->burofax =  0;
        $this->gastos =  0;


    }

    /**
     * @return ArrayCollection
     */
    public function getCalculadora()
    {
        return $this->calculadora;
    }

    /**
     * @param ArrayCollection $calculadora
     */
    public function setCalculadora($calculadora)
    {
        $this->calculadora = $calculadora;
    }

    /**
     * @param RemesaCalculadoraModel $calculadora
     */
    public function addCalculadora($calculadora)
    {
        $this->calculadora->add($calculadora);
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
     * @return \DateTime
     */
    public function getEmision()
    {
        return $this->emision;
    }

    /**
     * @param \DateTime $emision
     */
    public function setEmision($emision)
    {
        $this->emision = $emision;
    }

    /**
     * @return bool
     */
    public function isNotice()
    {
        return $this->notice;
    }

    /**
     * @param bool $notice
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;
    }

    /**
     * @return string
     */
    public function getNoticeMessage()
    {
        return $this->noticeMessage;
    }

    /**
     * @param string $noticeMessage
     */
    public function setNoticeMessage($noticeMessage)
    {
        $this->noticeMessage = $noticeMessage;
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
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param float $extra
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
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

    /**
     * @return float
     */
    public function getCosteFinancieroTotal()
    {
        return $this->costeFinancieroTotal;
    }

    /**
     * @param float $costeFinancieroTotal
     */
    public function setCosteFinancieroTotal($costeFinancieroTotal)
    {
        $this->costeFinancieroTotal = $costeFinancieroTotal;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroTae()
    {
        return $this->costeFinancieroTae;
    }

    /**
     * @param float $costeFinancieroTae
     */
    public function setCosteFinancieroTae($costeFinancieroTae)
    {
        $this->costeFinancieroTae = $costeFinancieroTae;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroMensual()
    {
        return $this->costeFinancieroMensual;
    }

    /**
     * @param float $costeFinancieroMensual
     */
    public function setCosteFinancieroMensual($costeFinancieroMensual)
    {
        $this->costeFinancieroMensual = $costeFinancieroMensual;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroNominal()
    {
        return $this->costeFinancieroNominal;
    }

    /**
     * @param float $costeFinancieroNominal
     */
    public function setCosteFinancieroNominal($costeFinancieroNominal)
    {
        $this->costeFinancieroNominal = $costeFinancieroNominal;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroCoste()
    {
        return $this->costeFinancieroCoste;
    }

    /**
     * @param float $costeFinancieroCoste
     */
    public function setCosteFinancieroCoste($costeFinancieroCoste)
    {
        $this->costeFinancieroCoste = $costeFinancieroCoste;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroLiquido()
    {
        return $this->costeFinancieroLiquido;
    }

    /**
     * @param float $costeFinancieroLiquido
     */
    public function setCosteFinancieroLiquido($costeFinancieroLiquido)
    {
        $this->costeFinancieroLiquido = $costeFinancieroLiquido;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroLedserTotal()
    {
        return $this->costeFinancieroLedserTotal;
    }

    /**
     * @param float $costeFinancieroLedserTotal
     */
    public function setCosteFinancieroLedserTotal($costeFinancieroLedserTotal)
    {
        $this->costeFinancieroLedserTotal = $costeFinancieroLedserTotal;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroLedserTae()
    {
        return $this->costeFinancieroLedserTae;
    }

    /**
     * @param float $costeFinancieroLedserTae
     */
    public function setCosteFinancieroLedserTae($costeFinancieroLedserTae)
    {
        $this->costeFinancieroLedserTae = $costeFinancieroLedserTae;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroLedserMensual()
    {
        return $this->costeFinancieroLedserMensual;
    }

    /**
     * @param float $costeFinancieroLedserMensual
     */
    public function setCosteFinancieroLedserMensual($costeFinancieroLedserMensual)
    {
        $this->costeFinancieroLedserMensual = $costeFinancieroLedserMensual;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroLedserNominal()
    {
        return $this->costeFinancieroLedserNominal;
    }

    /**
     * @param float $costeFinancieroLedserNominal
     */
    public function setCosteFinancieroLedserNominal($costeFinancieroLedserNominal)
    {
        $this->costeFinancieroLedserNominal = $costeFinancieroLedserNominal;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroLedserCoste()
    {
        return $this->costeFinancieroLedserCoste;
    }

    /**
     * @param float $costeFinancieroLedserCoste
     */
    public function setCosteFinancieroLedserCoste($costeFinancieroLedserCoste)
    {
        $this->costeFinancieroLedserCoste = $costeFinancieroLedserCoste;
    }

    /**
     * @return float
     */
    public function getCosteFinancieroLedserLiquido()
    {
        return $this->costeFinancieroLedserLiquido;
    }

    /**
     * @param float $costeFinancieroLedserLiquido
     */
    public function setCosteFinancieroLedserLiquido($costeFinancieroLedserLiquido)
    {
        $this->costeFinancieroLedserLiquido = $costeFinancieroLedserLiquido;
    }

    /**
     * @return float
     */
    public function getCosteTotalTotal()
    {
        return $this->costeTotalTotal;
    }

    /**
     * @param float $costeTotalTotal
     */
    public function setCosteTotalTotal($costeTotalTotal)
    {
        $this->costeTotalTotal = $costeTotalTotal;
    }

    /**
     * @return float
     */
    public function getCosteTotalTae()
    {
        return $this->costeTotalTae;
    }

    /**
     * @param float $costeTotalTae
     */
    public function setCosteTotalTae($costeTotalTae)
    {
        $this->costeTotalTae = $costeTotalTae;
    }

    /**
     * @return float
     */
    public function getCosteTotalMensual()
    {
        return $this->costeTotalMensual;
    }

    /**
     * @param float $costeTotalMensual
     */
    public function setCosteTotalMensual($costeTotalMensual)
    {
        $this->costeTotalMensual = $costeTotalMensual;
    }

    /**
     * @return float
     */
    public function getCosteTotalNominal()
    {
        return $this->costeTotalNominal;
    }

    /**
     * @param float $costeTotalNominal
     */
    public function setCosteTotalNominal($costeTotalNominal)
    {
        $this->costeTotalNominal = $costeTotalNominal;
    }

    /**
     * @return float
     */
    public function getCosteTotalCoste()
    {
        return $this->costeTotalCoste;
    }

    /**
     * @param float $costeTotalCoste
     */
    public function setCosteTotalCoste($costeTotalCoste)
    {
        $this->costeTotalCoste = $costeTotalCoste;
    }

    /**
     * @return float
     */
    public function getCosteTotalLiquido()
    {
        return $this->costeTotalLiquido;
    }

    /**
     * @param float $costeTotalLiquido
     */
    public function setCosteTotalLiquido($costeTotalLiquido)
    {
        $this->costeTotalLiquido = $costeTotalLiquido;
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
     * @return float
     */
    public function getTotalNominal()
    {
        return $this->totalNominal;
    }

    /**
     * @param float $totalNominal
     */
    public function setTotalNominal($totalNominal)
    {
        $this->totalNominal = $totalNominal;
    }

    /**
     * @return int
     */
    public function getMediaDias()
    {
        return $this->mediaDias;
    }

    /**
     * @param int $mediaDias
     */
    public function setMediaDias($mediaDias)
    {
        $this->mediaDias = $mediaDias;
    }

    /**
     * @return float
     */
    public function getMediaTae()
    {
        return $this->mediaTae;
    }

    /**
     * @param float $mediaTae
     */
    public function setMediaTae($mediaTae)
    {
        $this->mediaTae = $mediaTae;
    }

    /**
     * @return float
     */
    public function getTotalCosteFinanciero()
    {
        return $this->totalCosteFinanciero;
    }

    /**
     * @param float $totalCosteFinanciero
     */
    public function setTotalCosteFinanciero($totalCosteFinanciero)
    {
        $this->totalCosteFinanciero = $totalCosteFinanciero;
    }

    /**
     * @return float
     */
    public function getTotalTimbres()
    {
        return $this->totalTimbres;
    }

    /**
     * @param float $totalTimbres
     */
    public function setTotalTimbres($totalTimbres)
    {
        $this->totalTimbres = $totalTimbres;
    }

    /**
     * @return float
     */
    public function getTotalCoste()
    {
        return $this->totalCoste;
    }

    /**
     * @param float $totalCoste
     */
    public function setTotalCoste($totalCoste)
    {
        $this->totalCoste = $totalCoste;
    }

    
}