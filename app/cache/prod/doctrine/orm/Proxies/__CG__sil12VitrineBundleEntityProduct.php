<?php

namespace Proxies\__CG__\sil12\VitrineBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \sil12\VitrineBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'name', 'price', 'description', 'label', 'stock', 'orderline', 'category', 'promotions', 'groups');
        }

        return array('__isInitialized__', 'id', 'name', 'price', 'description', 'label', 'stock', 'orderline', 'category', 'promotions', 'groups');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', array($label));

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', array());

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setStock($stock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStock', array($stock));

        return parent::setStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function getStock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStock', array());

        return parent::getStock();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrderline(\sil12\VitrineBundle\Entity\OrderLine $orderline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrderline', array($orderline));

        return parent::addOrderline($orderline);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrderline(\sil12\VitrineBundle\Entity\OrderLine $orderline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrderline', array($orderline));

        return parent::removeOrderline($orderline);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderline', array());

        return parent::getOrderline();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\sil12\VitrineBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function addPromotion(\sil12\VitrineBundle\Entity\Promotion $promotions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPromotion', array($promotions));

        return parent::addPromotion($promotions);
    }

    /**
     * {@inheritDoc}
     */
    public function removePromotion(\sil12\VitrineBundle\Entity\Promotion $promotions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePromotion', array($promotions));

        return parent::removePromotion($promotions);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotions', array());

        return parent::getPromotions();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\sil12\VitrineBundle\Entity\Promotion $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', array($groups));

        return parent::addGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\sil12\VitrineBundle\Entity\Promotion $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', array($groups));

        return parent::removeGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', array());

        return parent::getGroups();
    }

}
