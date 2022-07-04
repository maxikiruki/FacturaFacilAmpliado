<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \App\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'nif', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'web', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'enterprise', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'invoices'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'nif', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'web', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'enterprise', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'invoices'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(string $address): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getNif(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNif', []);

        return parent::getNif();
    }

    /**
     * {@inheritDoc}
     */
    public function setNif(string $nif): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNif', [$nif]);

        return parent::setNif($nif);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(string $telephone): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeb(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeb', []);

        return parent::getWeb();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeb(string $web): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeb', [$web]);

        return parent::setWeb($web);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getEnterprise(): ?\App\Entity\Enterprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnterprise', []);

        return parent::getEnterprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnterprise(?\App\Entity\Enterprise $enterprise): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnterprise', [$enterprise]);

        return parent::setEnterprise($enterprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvoices(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvoices', []);

        return parent::getInvoices();
    }

    /**
     * {@inheritDoc}
     */
    public function addInvoice(\App\Entity\Invoice $invoice): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInvoice', [$invoice]);

        return parent::addInvoice($invoice);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInvoice(\App\Entity\Invoice $invoice): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInvoice', [$invoice]);

        return parent::removeInvoice($invoice);
    }

}
