<?php

class ProductValueNormalizer_031b1c6 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c58438481ddd468452442 = null;
    private $initializer5c58438481dec760466335 = null;
    private static $publicProperties5c58438481da3897194304 = [
        
    ];
    public function normalize($entity, $format = null, array $context = []) : array
    {
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, 'normalize', array('entity' => $entity, 'format' => $format, 'context' => $context), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        return $this->valueHolder5c58438481ddd468452442->normalize($entity, $format, $context);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        return $this->valueHolder5c58438481ddd468452442->supportsNormalization($data, $format);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($instance);
        $instance->initializer5c58438481dec760466335 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer, \Akeneo\Tool\Component\StorageUtils\Repository\IdentifiableObjectRepositoryInterface $attributeRepository)
    {
        static $reflection;
        if (! $this->valueHolder5c58438481ddd468452442) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer');
            $this->valueHolder5c58438481ddd468452442 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($this);
        }
        $this->valueHolder5c58438481ddd468452442->__construct($normalizer, $attributeRepository);
    }
    public function & __get($name)
    {
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, '__get', ['name' => $name], $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        if (isset(self::$publicProperties5c58438481da3897194304[$name])) {
            return $this->valueHolder5c58438481ddd468452442->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438481ddd468452442;
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
        $targetObject = $this->valueHolder5c58438481ddd468452442;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438481ddd468452442;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c58438481ddd468452442;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, '__isset', array('name' => $name), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438481ddd468452442;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c58438481ddd468452442;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, '__unset', array('name' => $name), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438481ddd468452442;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c58438481ddd468452442;
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
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, '__clone', array(), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        $this->valueHolder5c58438481ddd468452442 = clone $this->valueHolder5c58438481ddd468452442;
    }
    public function __sleep()
    {
        $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, '__sleep', array(), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
        return array('valueHolder5c58438481ddd468452442');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c58438481dec760466335 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c58438481dec760466335;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c58438481dec760466335 && ($this->initializer5c58438481dec760466335->__invoke($valueHolder5c58438481ddd468452442, $this, 'initializeProxy', array(), $this->initializer5c58438481dec760466335) || 1) && $this->valueHolder5c58438481ddd468452442 = $valueHolder5c58438481ddd468452442;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c58438481ddd468452442;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c58438481ddd468452442;
    }
}
