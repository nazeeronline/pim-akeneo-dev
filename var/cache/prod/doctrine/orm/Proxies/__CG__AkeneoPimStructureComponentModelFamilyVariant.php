<?php

namespace Proxies\__CG__\Akeneo\Pim\Structure\Component\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FamilyVariant extends \Akeneo\Pim\Structure\Component\Model\FamilyVariant implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'id', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'code', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'family', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'variantAttributeSets', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'locale', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'translations'];
        }

        return ['__isInitialized__', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'id', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'code', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'family', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'variantAttributeSets', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'locale', '' . "\0" . 'Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant' . "\0" . 'translations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FamilyVariant $proxy) {
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
    public function getCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(string $code): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommonAttributes(): \Akeneo\Pim\Structure\Component\Model\CommonAttributeCollection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommonAttributes', []);

        return parent::getCommonAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantAttributeSet(int $level): ?\Akeneo\Pim\Structure\Component\Model\VariantAttributeSetInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantAttributeSet', [$level]);

        return parent::getVariantAttributeSet($level);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantAttributeSets(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantAttributeSets', []);

        return parent::getVariantAttributeSets();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributes', []);

        return parent::getAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function getAxes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAxes', []);

        return parent::getAxes();
    }

    /**
     * {@inheritDoc}
     */
    public function addVariantAttributeSet(\Akeneo\Pim\Structure\Component\Model\VariantAttributeSetInterface $variantAttributeSet): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVariantAttributeSet', [$variantAttributeSet]);

        parent::addVariantAttributeSet($variantAttributeSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getFamily(): ?\Akeneo\Pim\Structure\Component\Model\FamilyInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFamily', []);

        return parent::getFamily();
    }

    /**
     * {@inheritDoc}
     */
    public function setFamily(\Akeneo\Pim\Structure\Component\Model\FamilyInterface $family): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFamily', [$family]);

        parent::setFamily($family);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfLevel(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfLevel', []);

        return parent::getNumberOfLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', [$locale]);

        return parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation($locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', [$locale]);

        return parent::getTranslation($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation(\Akeneo\Tool\Component\Localization\Model\TranslationInterface $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        return parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation(\Akeneo\Tool\Component\Localization\Model\TranslationInterface $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        return parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationFQCN()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationFQCN', []);

        return parent::getTranslationFQCN();
    }

    /**
     * {@inheritDoc}
     */
    public function getLevelForAttributeCode(string $attributeCode): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevelForAttributeCode', [$attributeCode]);

        return parent::getLevelForAttributeCode($attributeCode);
    }

}
