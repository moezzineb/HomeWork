<?php

namespace Proxies\__CG__\Web\ProjectBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Projet extends \Web\ProjectBundle\Entity\Projet implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'idProjet', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'idAbonne', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'titre', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'description', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'duree', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'budget', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'statut', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'dateDebut', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'categorie', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'freelancer');
        }

        return array('__isInitialized__', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'idProjet', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'idAbonne', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'titre', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'description', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'duree', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'budget', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'statut', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'dateDebut', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'categorie', '' . "\0" . 'Web\\ProjectBundle\\Entity\\Projet' . "\0" . 'freelancer');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Projet $proxy) {
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
    public function getIdProjet()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProjet();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProjet', array());

        return parent::getIdProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProjet($idProjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProjet', array($idProjet));

        return parent::setIdProjet($idProjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAbonne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAbonne', array());

        return parent::getIdAbonne();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAbonne($idAbonne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAbonne', array($idAbonne));

        return parent::setIdAbonne($idAbonne);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
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
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', array());

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree($duree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', array($duree));

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function getBudget()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBudget', array());

        return parent::getBudget();
    }

    /**
     * {@inheritDoc}
     */
    public function setBudget($budget)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBudget', array($budget));

        return parent::setBudget($budget);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', array());

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut($statut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', array($statut));

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', array());

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut($dateDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', array($dateDebut));

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', array());

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie($categorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', array($categorie));

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getFreelancer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFreelancer', array());

        return parent::getFreelancer();
    }

    /**
     * {@inheritDoc}
     */
    public function setFreelancer($freelancer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFreelancer', array($freelancer));

        return parent::setFreelancer($freelancer);
    }

}