<?php

class ProductValuesNormalizer_8997cea extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c5845f0632a7176299181 = null;
    private $initializer5c5845f0632b7173717192 = null;
    private static $publicProperties5c5845f06324d840463052 = [
        
    ];
    public function normalize($values, $format = null, array $context = [])
    {
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, 'normalize', array('values' => $values, 'format' => $format, 'context' => $context), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        return $this->valueHolder5c5845f0632a7176299181->normalize($values, $format, $context);
    }
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        return $this->valueHolder5c5845f0632a7176299181->supportsNormalization($data, $format);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($instance);
        $instance->initializer5c5845f0632b7173717192 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\Serializer\Normalizer\NormalizerInterface $valueNormalizer)
    {
        static $reflection;
        if (! $this->valueHolder5c5845f0632a7176299181) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
            $this->valueHolder5c5845f0632a7176299181 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);
        }
        $this->valueHolder5c5845f0632a7176299181->__construct($valueNormalizer);
    }
    public function & __get($name)
    {
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, '__get', ['name' => $name], $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        if (isset(self::$publicProperties5c5845f06324d840463052[$name])) {
            return $this->valueHolder5c5845f0632a7176299181->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0632a7176299181;
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
        $targetObject = $this->valueHolder5c5845f0632a7176299181;
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
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0632a7176299181;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c5845f0632a7176299181;
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
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, '__isset', array('name' => $name), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0632a7176299181;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f0632a7176299181;
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
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, '__unset', array('name' => $name), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0632a7176299181;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f0632a7176299181;
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
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, '__clone', array(), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        $this->valueHolder5c5845f0632a7176299181 = clone $this->valueHolder5c5845f0632a7176299181;
    }
    public function __sleep()
    {
        $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, '__sleep', array(), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
        return array('valueHolder5c5845f0632a7176299181');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c5845f0632b7173717192 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c5845f0632b7173717192;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c5845f0632b7173717192 && ($this->initializer5c5845f0632b7173717192->__invoke($valueHolder5c5845f0632a7176299181, $this, 'initializeProxy', array(), $this->initializer5c5845f0632b7173717192) || 1) && $this->valueHolder5c5845f0632a7176299181 = $valueHolder5c5845f0632a7176299181;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c5845f0632a7176299181;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c5845f0632a7176299181;
    }
}
