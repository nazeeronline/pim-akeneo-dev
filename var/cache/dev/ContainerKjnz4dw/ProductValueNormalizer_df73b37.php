<?php

class ProductValueNormalizer_df73b37 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5c58432fe80c7419278859 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c58432fe80d3637155689 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5c58432fe80a5892954579 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function normalize($entity, $format = null, array $context = []) : array
    {
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, 'normalize', array('entity' => $entity, 'format' => $format, 'context' => $context), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        return $this->valueHolder5c58432fe80c7419278859->normalize($entity, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null) : bool
    {
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        return $this->valueHolder5c58432fe80c7419278859->supportsNormalization($data, $format);
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

        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($instance);

        $instance->initializer5c58432fe80d3637155689 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer, \Akeneo\Tool\Component\StorageUtils\Repository\IdentifiableObjectRepositoryInterface $attributeRepository)
    {
        static $reflection;

        if (! $this->valueHolder5c58432fe80c7419278859) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer');
            $this->valueHolder5c58432fe80c7419278859 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($this);

        }

        $this->valueHolder5c58432fe80c7419278859->__construct($normalizer, $attributeRepository);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, '__get', ['name' => $name], $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        if (isset(self::$publicProperties5c58432fe80a5892954579[$name])) {
            return $this->valueHolder5c58432fe80c7419278859->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58432fe80c7419278859;

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

        $targetObject = $this->valueHolder5c58432fe80c7419278859;
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
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58432fe80c7419278859;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5c58432fe80c7419278859;
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
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, '__isset', array('name' => $name), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58432fe80c7419278859;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58432fe80c7419278859;
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
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, '__unset', array('name' => $name), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58432fe80c7419278859;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58432fe80c7419278859;
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
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, '__clone', array(), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        $this->valueHolder5c58432fe80c7419278859 = clone $this->valueHolder5c58432fe80c7419278859;
    }

    public function __sleep()
    {
        $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, '__sleep', array(), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;

        return array('valueHolder5c58432fe80c7419278859');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c58432fe80d3637155689 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5c58432fe80d3637155689;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5c58432fe80d3637155689 && ($this->initializer5c58432fe80d3637155689->__invoke($valueHolder5c58432fe80c7419278859, $this, 'initializeProxy', array(), $this->initializer5c58432fe80d3637155689) || 1) && $this->valueHolder5c58432fe80c7419278859 = $valueHolder5c58432fe80c7419278859;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c58432fe80c7419278859;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c58432fe80c7419278859;
    }


}
