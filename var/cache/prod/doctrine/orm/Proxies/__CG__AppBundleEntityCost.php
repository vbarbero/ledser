<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cost extends \AppBundle\Entity\Cost implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'total', 'tae', 'mensual', 'retencion', 'nominal', 'coste', 'liquido', 'retencionTotal', 'id', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', 'total', 'tae', 'mensual', 'retencion', 'nominal', 'coste', 'liquido', 'retencionTotal', 'id', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cost $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', []);

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', [$total]);

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getTae()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTae', []);

        return parent::getTae();
    }

    /**
     * {@inheritDoc}
     */
    public function setTae($tae)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTae', [$tae]);

        return parent::setTae($tae);
    }

    /**
     * {@inheritDoc}
     */
    public function getMensual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMensual', []);

        return parent::getMensual();
    }

    /**
     * {@inheritDoc}
     */
    public function setMensual($mensual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMensual', [$mensual]);

        return parent::setMensual($mensual);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetencion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetencion', []);

        return parent::getRetencion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetencion($retencion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetencion', [$retencion]);

        return parent::setRetencion($retencion);
    }

    /**
     * {@inheritDoc}
     */
    public function getNominal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNominal', []);

        return parent::getNominal();
    }

    /**
     * {@inheritDoc}
     */
    public function setNominal($nominal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNominal', [$nominal]);

        return parent::setNominal($nominal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoste', []);

        return parent::getCoste();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoste($coste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoste', [$coste]);

        return parent::setCoste($coste);
    }

    /**
     * {@inheritDoc}
     */
    public function getLiquido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLiquido', []);

        return parent::getLiquido();
    }

    /**
     * {@inheritDoc}
     */
    public function setLiquido($liquido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLiquido', [$liquido]);

        return parent::setLiquido($liquido);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetencionTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetencionTotal', []);

        return parent::getRetencionTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetencionTotal($retencionTotal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetencionTotal', [$retencionTotal]);

        return parent::setRetencionTotal($retencionTotal);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

}
