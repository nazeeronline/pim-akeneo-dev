<?php

class ProductValuesNormalizer_c6b508f extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5c58433be5144129420784 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c58433be5150315610758 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5c58433be5122414226276 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function normalize($values, $format = null, array $context = [])
    {
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, 'normalize', array('values' => $values, 'format' => $format, 'context' => $context), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        return $this->valueHolder5c58433be5144129420784->normalize($values, $format, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        return $this->valueHolder5c58433be5144129420784->supportsNormalization($data, $format);
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

        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($instance);

        $instance->initializer5c58433be5150315610758 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Serializer\Normalizer\NormalizerInterface $valueNormalizer)
    {
        static $reflection;

        if (! $this->valueHolder5c58433be5144129420784) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
            $this->valueHolder5c58433be5144129420784 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);

        }

        $this->valueHolder5c58433be5144129420784->__construct($valueNormalizer);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, '__get', ['name' => $name], $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        if (isset(self::$publicProperties5c58433be5122414226276[$name])) {
            return $this->valueHolder5c58433be5144129420784->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be5144129420784;

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

        $targetObject = $this->valueHolder5c58433be5144129420784;
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
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be5144129420784;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5c58433be5144129420784;
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
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, '__isset', array('name' => $name), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be5144129420784;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58433be5144129420784;
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
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, '__unset', array('name' => $name), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58433be5144129420784;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c58433be5144129420784;
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
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, '__clone', array(), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        $this->valueHolder5c58433be5144129420784 = clone $this->valueHolder5c58433be5144129420784;
    }

    public function __sleep()
    {
        $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, '__sleep', array(), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;

        return array('valueHolder5c58433be5144129420784');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c58433be5150315610758 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5c58433be5150315610758;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5c58433be5150315610758 && ($this->initializer5c58433be5150315610758->__invoke($valueHolder5c58433be5144129420784, $this, 'initializeProxy', array(), $this->initializer5c58433be5150315610758) || 1) && $this->valueHolder5c58433be5144129420784 = $valueHolder5c58433be5144129420784;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c58433be5144129420784;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c58433be5144129420784;
    }


}
