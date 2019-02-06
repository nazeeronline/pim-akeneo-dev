<?php

class ProductModelNormalizer_b55f2b2 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\ProductModelNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5c58433be3f6a635843657 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c58433be3f76701274981 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5c58433be3f44757192698 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function normalize($productModel, $format = null, array $context = []) : array
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, 'normalize', array('productModel' => $productModel, 'format' => $format, 'context' => $context), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        return $this->valueHolder5c58433be3f6a635843657->normalize($productModel, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null) : bool
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        return $this->valueHolder5c58433be3f6a635843657->supportsNormalization($data, $format);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\ProductModelNormalizer $instance) {
            unset($instance->associationsNormalizer, $instance->standardNormalizer, $instance->filter);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\ProductModelNormalizer')->__invoke($instance);

        $instance->initializer5c58433be3f76701274981 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Akeneo\Pim\Enrichment\Bundle\Filter\CollectionFilterInterface $filter, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $associationsNormalizer, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $standardNormalizer)
    {
        static $reflection;

        if (! $this->valueHolder5c58433be3f6a635843657) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\ProductModelNormalizer');
            $this->valueHolder5c58433be3f6a635843657 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\ProductModelNormalizer $instance) {
            unset($instance->associationsNormalizer, $instance->standardNormalizer, $instance->filter);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\ProductModelNormalizer')->__invoke($this);

        }

        $this->valueHolder5c58433be3f6a635843657->__construct($filter, $associationsNormalizer, $standardNormalizer);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, '__get', ['name' => $name], $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        if (isset(self::$publicProperties5c58433be3f44757192698[$name])) {
            return $this->valueHolder5c58433be3f6a635843657->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be3f6a635843657;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5c58433be3f6a635843657;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be3f6a635843657;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5c58433be3f6a635843657;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, '__isset', array('name' => $name), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be3f6a635843657;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58433be3f6a635843657;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, '__unset', array('name' => $name), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be3f6a635843657;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58433be3f6a635843657;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, '__clone', array(), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        $this->valueHolder5c58433be3f6a635843657 = clone $this->valueHolder5c58433be3f6a635843657;
    }

    public function __sleep()
    {
        $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, '__sleep', array(), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;

        return array('valueHolder5c58433be3f6a635843657');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\ProductModelNormalizer $instance) {
            unset($instance->associationsNormalizer, $instance->standardNormalizer, $instance->filter);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\ProductModelNormalizer')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c58433be3f76701274981 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5c58433be3f76701274981;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5c58433be3f76701274981 && ($this->initializer5c58433be3f76701274981->__invoke($valueHolder5c58433be3f6a635843657, $this, 'initializeProxy', array(), $this->initializer5c58433be3f76701274981) || 1) && $this->valueHolder5c58433be3f6a635843657 = $valueHolder5c58433be3f6a635843657;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c58433be3f6a635843657;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c58433be3f6a635843657;
    }


}
