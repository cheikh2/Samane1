<?php

namespace Samane\Proxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Physique extends \Physique implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', '' . "\0" . 'Physique' . "\0" . 'id', '' . "\0" . 'Physique' . "\0" . 'prenom', '' . "\0" . 'Physique' . "\0" . 'nom', '' . "\0" . 'Physique' . "\0" . 'adress', '' . "\0" . 'Physique' . "\0" . 'email', '' . "\0" . 'Physique' . "\0" . 'telephone', '' . "\0" . 'Physique' . "\0" . 'sexe', '' . "\0" . 'Physique' . "\0" . 'profession', '' . "\0" . 'Physique' . "\0" . 'cni', '' . "\0" . 'Physique' . "\0" . 'salaire', '' . "\0" . 'Physique' . "\0" . 'moral', '' . "\0" . 'Physique' . "\0" . 'comptes'];
        }

        return ['__isInitialized__', '' . "\0" . 'Physique' . "\0" . 'id', '' . "\0" . 'Physique' . "\0" . 'prenom', '' . "\0" . 'Physique' . "\0" . 'nom', '' . "\0" . 'Physique' . "\0" . 'adress', '' . "\0" . 'Physique' . "\0" . 'email', '' . "\0" . 'Physique' . "\0" . 'telephone', '' . "\0" . 'Physique' . "\0" . 'sexe', '' . "\0" . 'Physique' . "\0" . 'profession', '' . "\0" . 'Physique' . "\0" . 'cni', '' . "\0" . 'Physique' . "\0" . 'salaire', '' . "\0" . 'Physique' . "\0" . 'moral', '' . "\0" . 'Physique' . "\0" . 'comptes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Physique $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress($adress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress', [$adress]);

        return parent::setAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfession()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfession', []);

        return parent::getProfession();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfession($profession)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfession', [$profession]);

        return parent::setProfession($profession);
    }

    /**
     * {@inheritDoc}
     */
    public function getCni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCni', []);

        return parent::getCni();
    }

    /**
     * {@inheritDoc}
     */
    public function setCni($cni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCni', [$cni]);

        return parent::setCni($cni);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalaire', []);

        return parent::getSalaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalaire($salaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalaire', [$salaire]);

        return parent::setSalaire($salaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoral()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoral', []);

        return parent::getMoral();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoral($moral)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoral', [$moral]);

        return parent::setMoral($moral);
    }

    /**
     * {@inheritDoc}
     */
    public function getComptes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComptes', []);

        return parent::getComptes();
    }

    /**
     * {@inheritDoc}
     */
    public function setComptes($comptes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComptes', [$comptes]);

        return parent::setComptes($comptes);
    }

}
