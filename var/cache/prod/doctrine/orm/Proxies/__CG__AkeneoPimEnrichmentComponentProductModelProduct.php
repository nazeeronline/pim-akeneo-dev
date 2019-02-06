<?php

namespace Proxies\__CG__\Akeneo\Pim\Enrichment\Component\Product\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \Akeneo\Pim\Enrichment\Component\Product\Model\Product implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'rawValues', 'created', 'updated', 'locale', 'scope', 'values', 'family', 'familyId', 'categories', 'categoryIds', 'enabled', 'groups', 'groupIds', 'associations', 'completenesses', 'identifier', 'uniqueData', 'parent', 'familyVariant'];
        }

        return ['__isInitialized__', 'id', 'rawValues', 'created', 'updated', 'locale', 'scope', 'values', 'family', 'familyId', 'categories', 'categoryIds', 'enabled', 'groups', 'groupIds', 'associations', 'completenesses', 'identifier', 'uniqueData', 'parent', 'familyVariant'];
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
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', []);

        return parent::getLocale();
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
    public function getScope()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScope', []);

        return parent::getScope();
    }

    /**
     * {@inheritDoc}
     */
    public function setScope($scope)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScope', [$scope]);

        return parent::setScope($scope);
    }

    /**
     * {@inheritDoc}
     */
    public function addValue(\Akeneo\Pim\Enrichment\Component\Product\Model\ValueInterface $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addValue', [$value]);

        return parent::addValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeValue(\Akeneo\Pim\Enrichment\Component\Product\Model\ValueInterface $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeValue', [$value]);

        return parent::removeValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsedAttributeCodes(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsedAttributeCodes', []);

        return parent::getUsedAttributeCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function getValue($attributeCode, $localeCode = NULL, $scopeCode = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', [$attributeCode, $localeCode, $scopeCode]);

        return parent::getValue($attributeCode, $localeCode, $scopeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getRawValues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRawValues', []);

        return parent::getRawValues();
    }

    /**
     * {@inheritDoc}
     */
    public function setRawValues(array $rawValues)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRawValues', [$rawValues]);

        return parent::setRawValues($rawValues);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAttribute(string $attributeCode): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAttribute', [$attributeCode]);

        return parent::hasAttribute($attributeCode);
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
    public function setFamily(\Akeneo\Pim\Structure\Component\Model\FamilyInterface $family = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFamily', [$family]);

        return parent::setFamily($family);
    }

    /**
     * {@inheritDoc}
     */
    public function setFamilyId($familyId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFamilyId', [$familyId]);

        return parent::setFamilyId($familyId);
    }

    /**
     * {@inheritDoc}
     */
    public function getFamilyId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFamilyId', []);

        return parent::getFamilyId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentifier(\Akeneo\Pim\Enrichment\Component\Product\Model\ValueInterface $identifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifier', [$identifier]);

        return parent::setIdentifier($identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues(): \Akeneo\Pim\Enrichment\Component\Product\Model\ValueCollectionInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValues', []);

        return parent::getValues();
    }

    /**
     * {@inheritDoc}
     */
    public function setValues(\Akeneo\Pim\Enrichment\Component\Product\Model\ValueCollectionInterface $values)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValues', [$values]);

        return parent::setValues($values);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel($locale = NULL, $scope = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', [$locale, $scope]);

        return parent::getLabel($locale, $scope);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\Akeneo\Tool\Component\Classification\Model\CategoryInterface $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories(\Doctrine\Common\Collections\Collection $categories): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\Akeneo\Tool\Component\Classification\Model\CategoryInterface $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryCodes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryCodes', []);

        return parent::getCategoryCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupCodes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupCodes', []);

        return parent::getGroupCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroups(\Doctrine\Common\Collections\Collection $groups): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroups', [$groups]);

        parent::setGroups($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAttributeInFamily(\Akeneo\Pim\Structure\Component\Model\AttributeInterface $attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAttributeInFamily', [$attribute]);

        return parent::hasAttributeInFamily($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function isAttributeRemovable(\Akeneo\Pim\Structure\Component\Model\AttributeInterface $attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAttributeRemovable', [$attribute]);

        return parent::isAttributeRemovable($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function isAttributeEditable(\Akeneo\Pim\Structure\Component\Model\AttributeInterface $attribute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAttributeEditable', [$attribute]);

        return parent::isAttributeEditable($attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\Akeneo\Pim\Enrichment\Component\Product\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\Akeneo\Pim\Enrichment\Component\Product\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
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
    public function addAssociation(\Akeneo\Pim\Enrichment\Component\Product\Model\AssociationInterface $association): \Akeneo\Pim\Enrichment\Component\Product\Model\EntityWithAssociationsInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssociation', [$association]);

        return parent::addAssociation($association);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAssociation(\Akeneo\Pim\Enrichment\Component\Product\Model\AssociationInterface $association): \Akeneo\Pim\Enrichment\Component\Product\Model\EntityWithAssociationsInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAssociation', [$association]);

        return parent::removeAssociation($association);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociations', []);

        return parent::getAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllAssociations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllAssociations', []);

        return parent::getAllAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationForType(\Akeneo\Pim\Structure\Component\Model\AssociationTypeInterface $type): ?\Akeneo\Pim\Enrichment\Component\Product\Model\AssociationInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociationForType', [$type]);

        return parent::getAssociationForType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationForTypeCode($typeCode): ?\Akeneo\Pim\Enrichment\Component\Product\Model\AssociationInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociationForTypeCode', [$typeCode]);

        return parent::getAssociationForTypeCode($typeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function setAssociations(\Doctrine\Common\Collections\Collection $associations): \Akeneo\Pim\Enrichment\Component\Product\Model\EntityWithAssociationsInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssociations', [$associations]);

        return parent::setAssociations($associations);
    }

    /**
     * {@inheritDoc}
     */
    public function setCompletenesses(\Doctrine\Common\Collections\Collection $completenesses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompletenesses', [$completenesses]);

        return parent::setCompletenesses($completenesses);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompletenesses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompletenesses', []);

        return parent::getCompletenesses();
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueData', []);

        return parent::getUniqueData();
    }

    /**
     * {@inheritDoc}
     */
    public function addUniqueData(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductUniqueDataInterface $uniqueData)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUniqueData', [$uniqueData]);

        return parent::addUniqueData($uniqueData);
    }

    /**
     * {@inheritDoc}
     */
    public function setUniqueData(\Doctrine\Common\Collections\Collection $data): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUniqueData', [$data]);

        parent::setUniqueData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $parent = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getFamilyVariant(): ?\Akeneo\Pim\Structure\Component\Model\FamilyVariantInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFamilyVariant', []);

        return parent::getFamilyVariant();
    }

    /**
     * {@inheritDoc}
     */
    public function setFamilyVariant(\Akeneo\Pim\Structure\Component\Model\FamilyVariantInterface $familyVariant): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFamilyVariant', [$familyVariant]);

        parent::setFamilyVariant($familyVariant);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationLevel(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationLevel', []);

        return parent::getVariationLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function getValuesForVariation(): \Akeneo\Pim\Enrichment\Component\Product\Model\ValueCollectionInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValuesForVariation', []);

        return parent::getValuesForVariation();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoriesForVariation(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoriesForVariation', []);

        return parent::getCategoriesForVariation();
    }

    /**
     * {@inheritDoc}
     */
    public function isVariant(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVariant', []);

        return parent::isVariant();
    }

}
