<?php

class PropertiesNormalizer_47156f3 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c5845f059395665155901 = null;
    private $initializer5c5845f0593a6750681312 = null;
    private static $publicProperties5c5845f05935b021040607 = [
        
    ];
    public function normalize($product, $format = null, array $context = [])
    {
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, 'normalize', array('product' => $product, 'format' => $format, 'context' => $context), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        return $this->valueHolder5c5845f059395665155901->normalize($product, $format, $context);
    }
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        return $this->valueHolder5c5845f059395665155901->supportsNormalization($data, $format);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($instance);
        $instance->initializer5c5845f0593a6750681312 = $initializer;
        return $instance;
    }
    public function __construct(\Akeneo\Pim\Enrichment\Bundle\Filter\CollectionFilterInterface $filter, \Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer)
    {
        static $reflection;
        if (! $this->valueHolder5c5845f059395665155901) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer');
            $this->valueHolder5c5845f059395665155901 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($this);
        }
        $this->valueHolder5c5845f059395665155901->__construct($filter, $normalizer);
    }
    public function & __get($name)
    {
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, '__get', ['name' => $name], $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        if (isset(self::$publicProperties5c5845f05935b021040607[$name])) {
            return $this->valueHolder5c5845f059395665155901->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f059395665155901;
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
        $targetObject = $this->valueHolder5c5845f059395665155901;
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
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f059395665155901;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c5845f059395665155901;
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
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, '__isset', array('name' => $name), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f059395665155901;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f059395665155901;
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
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, '__unset', array('name' => $name), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f059395665155901;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f059395665155901;
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
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, '__clone', array(), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        $this->valueHolder5c5845f059395665155901 = clone $this->valueHolder5c5845f059395665155901;
    }
    public function __sleep()
    {
        $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, '__sleep', array(), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
        return array('valueHolder5c5845f059395665155901');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer $instance) {
            unset($instance->filter, $instance->normalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\PropertiesNormalizer')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c5845f0593a6750681312 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c5845f0593a6750681312;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c5845f0593a6750681312 && ($this->initializer5c5845f0593a6750681312->__invoke($valueHolder5c5845f059395665155901, $this, 'initializeProxy', array(), $this->initializer5c5845f0593a6750681312) || 1) && $this->valueHolder5c5845f059395665155901 = $valueHolder5c5845f059395665155901;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c5845f059395665155901;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c5845f059395665155901;
    }
}
