<?php

namespace Proxies\__CG__\Inventario\FrontBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Productos extends \Inventario\FrontBundle\Entity\Productos implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'idproducto', 'txrefinterna', 'txrefexterna', 'txnomproducto', 'txdescripcion', 'idclasifproductos');
        }

        return array('__isInitialized__', 'idproducto', 'txrefinterna', 'txrefexterna', 'txnomproducto', 'txdescripcion', 'idclasifproductos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Productos $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdproducto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdproducto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdproducto', array());

        return parent::getIdproducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTxrefinterna($txrefinterna)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTxrefinterna', array($txrefinterna));

        return parent::setTxrefinterna($txrefinterna);
    }

    /**
     * {@inheritDoc}
     */
    public function getTxrefinterna()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTxrefinterna', array());

        return parent::getTxrefinterna();
    }

    /**
     * {@inheritDoc}
     */
    public function setTxrefexterna($txrefexterna)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTxrefexterna', array($txrefexterna));

        return parent::setTxrefexterna($txrefexterna);
    }

    /**
     * {@inheritDoc}
     */
    public function getTxrefexterna()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTxrefexterna', array());

        return parent::getTxrefexterna();
    }

    /**
     * {@inheritDoc}
     */
    public function setTxnomproducto($txnomproducto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTxnomproducto', array($txnomproducto));

        return parent::setTxnomproducto($txnomproducto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTxnomproducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTxnomproducto', array());

        return parent::getTxnomproducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setTxdescripcion($txdescripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTxdescripcion', array($txdescripcion));

        return parent::setTxdescripcion($txdescripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTxdescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTxdescripcion', array());

        return parent::getTxdescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdclasifproductos(\Inventario\FrontBundle\Entity\Clasifproductos $idclasifproductos = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdclasifproductos', array($idclasifproductos));

        return parent::setIdclasifproductos($idclasifproductos);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdclasifproductos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdclasifproductos', array());

        return parent::getIdclasifproductos();
    }

}
