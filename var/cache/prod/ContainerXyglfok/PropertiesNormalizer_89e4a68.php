<?php

class PropertiesNormalizer_89e4a68 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c58438483d4b885901043 = null;
    private $initializer5c58438483d5c077241467 = null;
    private static $publicProperties5c58438483ce1811478582 = [
        
    ];
    public function normalize($product, $format = null, array $context = [])
    {
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, 'normalize', array('product' => $product, 'format' => $format, 'context' => $context), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        return $this->valueHolder5c58438483d4b885901043->normalize($product, $format, $context);
    }
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        return $this->valueHolder5c58438483d4b885901043->supportsNormalization($data, $format);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($instance);
        $instance->initializer5c58438483d5c077241467 = $initializer;
        return $instance;
    }
    public function __construct(\Akeneo\Pim\Enrichment\Bundle\Filter\CollectionFilterInterface $filter, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer)
    {
        static $reflection;
        if (! $this->valueHolder5c58438483d4b885901043) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer');
            $this->valueHolder5c58438483d4b885901043 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($this);
        }
        $this->valueHolder5c58438483d4b885901043->__construct($filter, $normalizer);
    }
    public function & __get($name)
    {
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, '__get', ['name' => $name], $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        if (isset(self::$publicProperties5c58438483ce1811478582[$name])) {
            return $this->valueHolder5c58438483d4b885901043->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438483d4b885901043;
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
        $targetObject = $this->valueHolder5c58438483d4b885901043;
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
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438483d4b885901043;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c58438483d4b885901043;
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
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, '__isset', array('name' => $name), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438483d4b885901043;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c58438483d4b885901043;
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
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, '__unset', array('name' => $name), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438483d4b885901043;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c58438483d4b885901043;
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
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, '__clone', array(), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        $this->valueHolder5c58438483d4b885901043 = clone $this->valueHolder5c58438483d4b885901043;
    }
    public function __sleep()
    {
        $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, '__sleep', array(), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
        return array('valueHolder5c58438483d4b885901043');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c58438483d5c077241467 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c58438483d5c077241467;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c58438483d5c077241467 && ($this->initializer5c58438483d5c077241467->__invoke($valueHolder5c58438483d4b885901043, $this, 'initializeProxy', array(), $this->initializer5c58438483d5c077241467) || 1) && $this->valueHolder5c58438483d4b885901043 = $valueHolder5c58438483d4b885901043;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c58438483d4b885901043;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c58438483d4b885901043;
    }
}
