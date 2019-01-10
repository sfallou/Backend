<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Panier extends \AppBundle\Entity\Panier implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'dateCreation', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'montant', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'etat', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'commandes');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'dateCreation', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'montant', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'etat', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Panier' . "\0" . 'commandes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Panier $proxy) {
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
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', array($dateCreation));

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', array());

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormule($formule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormule', array($formule));

        return parent::setFormule($formule);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormule', array());

        return parent::getFormule();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant($montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', array($montant));

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', array());

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\AppBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommande(\AppBundle\Entity\Commande $commande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommande', array($commande));

        return parent::addCommande($commande);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommande(\AppBundle\Entity\Commande $commande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommande', array($commande));

        return parent::removeCommande($commande);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommandes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommandes', array());

        return parent::getCommandes();
    }

}
