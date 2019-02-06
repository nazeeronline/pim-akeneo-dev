<?php

namespace Proxies\__CG__\Akeneo\Pim\Enrichment\Component\Product\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductModelAssociation extends \Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelAssociation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'associationType', 'owner', 'products', 'productModels', 'groups', 'groupIds'];
        }

        return ['__isInitialized__', 'id', 'associationType', 'owner', 'products', 'productModels', 'groups', 'groupIds'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductModelAssociation $proxy) {
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
    public function setAssociationType(\Akeneo\Pim\Structure\Component\Model\AssociationTypeInterface $associationType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssociationType', [$associationType]);

        return parent::setAssociationType($associationType);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociationType', []);

        return parent::getAssociationType();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Akeneo\Pim\Enrichment\Component\Product\Model\EntityWithAssociationsInterface $owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducts($products)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducts', [$products]);

        return parent::setProducts($products);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', []);

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduct(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface $product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduct', [$product]);

        return parent::addProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function hasProduct(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface $product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasProduct', [$product]);

        return parent::hasProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduct(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface $product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduct', [$product]);

        return parent::removeProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductModels(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductModels', []);

        return parent::getProductModels();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductModel(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $productModel): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductModel', [$productModel]);

        parent::addProductModel($productModel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductModel(\Akeneo\Pim\Enrichment\Component\Product\Model\ProductModelInterface $productModel): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductModel', [$productModel]);

        parent::removeProductModel($productModel);
    }

    /**
     * {@inheritDoc}
     */
    public function setProductModels($productModels): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductModels', [$productModels]);

        parent::setProductModels($productModels);
    }

    /**
     * {@inheritDoc}
     */
    public function setGroups($groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroups', [$groups]);

        return parent::setGroups($groups);
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
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

}
