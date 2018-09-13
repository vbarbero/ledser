<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Cost extends BaseEntity
{
    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $total;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $tae;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $mensual;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $retencion;

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
    protected $coste;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $liquido;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    protected $retencionTotal;


    public function __construct()
    {
      $this->setRetencion(0);
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return float
     */
    public function getTae()
    {
        return $this->tae;
    }

    /**
     * @param float $tae
     */
    public function setTae($tae)
    {
        $this->tae = $tae;
    }

    /**
     * @return float
     */
    public function getMensual()
    {
        return $this->mensual;
    }

    /**
     * @param float $mensual
     */
    public function setMensual($mensual)
    {
        $this->mensual = $mensual;
    }

    /**
     * @return float
     */
    public function getRetencion()
    {
        return $this->retencion;
    }

    /**
     * @param float $retencion
     */
    public function setRetencion($retencion)
    {
        $this->retencion = $retencion;
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
    public function getCoste()
    {
        return $this->coste;
    }

    /**
     * @param float $coste
     */
    public function setCoste($coste)
    {
        $this->coste = $coste;
    }

    /**
     * @return float
     */
    public function getLiquido()
    {
        return $this->liquido;
    }

    /**
     * @param float $liquido
     */
    public function setLiquido($liquido)
    {
        $this->liquido = $liquido;
    }

    /**
     * @return float
     */
    public function getRetencionTotal()
    {
        return $this->retencionTotal;
    }

    /**
     * @param float $retencionTotal
     */
    public function setRetencionTotal($retencionTotal)
    {
        $this->retencionTotal = $retencionTotal;
    }
}