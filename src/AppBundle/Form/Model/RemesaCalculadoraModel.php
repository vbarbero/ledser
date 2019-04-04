<?php

namespace AppBundle\Form\Model;


use AppBundle\Entity\Company;
use AppBundle\Entity\User;

class RemesaCalculadoraModel
{
    /**
     * @var float
     */
    protected $nominal;

    /**
     * @var float
     */
    protected $costeFinanciero;

    /**
     * @var float
     */
    protected $costeUnitario;

    /**
     * @var float
     */
    protected $timbres;

    /**
     * @var \DateTime
     */
    protected $formalizacion;

    /**
     * @var \DateTime
     */
    protected $vencimiento;
    /**
     * @var int
     */
    protected $dias;

    /**
     * @var float
     */
    protected $tae;
    /**
     * @var Company
     */
    protected $drawee;

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
    public function getCosteFinanciero()
    {
        return $this->costeFinanciero;
    }

    /**
     * @param float $costeFinanciero
     */
    public function setCosteFinanciero($costeFinanciero)
    {
        $this->costeFinanciero = $costeFinanciero;
    }

    /**
     * @return float
     */
    public function getCosteUnitario()
    {
        return $this->costeUnitario;
    }

    /**
     * @param float $costeUnitario
     */
    public function setCosteUnitario($costeUnitario)
    {
        $this->costeUnitario = $costeUnitario;
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
     * @return Company
     */
    public function getDrawee()
    {
        return $this->drawee;
    }

    /**
     * @param Company $drawee
     */
    public function setDrawee($drawee)
    {
        $this->drawee = $drawee;
    }
}