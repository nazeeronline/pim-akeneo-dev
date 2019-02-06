<?php

class PropertiesNormalizer_f2b5d5d extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5c58433be2e15904014250 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c58433be2e21750881670 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5c58433be2df3960150518 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function normalize($product, $format = null, array $context = [])
    {
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, 'normalize', array('product' => $product, 'format' => $format, 'context' => $context), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        return $this->valueHolder5c58433be2e15904014250->normalize($product, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        return $this->valueHolder5c58433be2e15904014250->supportsNormalization($data, $format);
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

        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($instance);

        $instance->initializer5c58433be2e21750881670 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Akeneo\Pim\Enrichment\Bundle\Filter\CollectionFilterInterface $filter, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer)
    {
        static $reflection;

        if (! $this->valueHolder5c58433be2e15904014250) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer');
            $this->valueHolder5c58433be2e15904014250 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($this);

        }

        $this->valueHolder5c58433be2e15904014250->__construct($filter, $normalizer);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, '__get', ['name' => $name], $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        if (isset(self::$publicProperties5c58433be2df3960150518[$name])) {
            return $this->valueHolder5c58433be2e15904014250->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be2e15904014250;

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

        $targetObject = $this->valueHolder5c58433be2e15904014250;
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
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be2e15904014250;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5c58433be2e15904014250;
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
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, '__isset', array('name' => $name), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be2e15904014250;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58433be2e15904014250;
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
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, '__unset', array('name' => $name), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be2e15904014250;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58433be2e15904014250;
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
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, '__clone', array(), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        $this->valueHolder5c58433be2e15904014250 = clone $this->valueHolder5c58433be2e15904014250;
    }

    public function __sleep()
    {
        $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, '__sleep', array(), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;

        return array('valueHolder5c58433be2e15904014250');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c58433be2e21750881670 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5c58433be2e21750881670;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5c58433be2e21750881670 && ($this->initializer5c58433be2e21750881670->__invoke($valueHolder5c58433be2e15904014250, $this, 'initializeProxy', array(), $this->initializer5c58433be2e21750881670) || 1) && $this->valueHolder5c58433be2e15904014250 = $valueHolder5c58433be2e15904014250;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c58433be2e15904014250;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c58433be2e15904014250;
    }


}
