<?php

class ProductValuesNormalizer_a52a1b3 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c5843848854d597145407 = null;
    private $initializer5c5843848855d952743627 = null;
    private static $publicProperties5c58438488516327543546 = [
        
    ];
    public function normalize($values, $format = null, array $context = [])
    {
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, 'normalize', array('values' => $values, 'format' => $format, 'context' => $context), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        return $this->valueHolder5c5843848854d597145407->normalize($values, $format, $context);
    }
    public function supportsNormalization($data, $format = null)
    {
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        return $this->valueHolder5c5843848854d597145407->supportsNormalization($data, $format);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($instance);
        $instance->initializer5c5843848855d952743627 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\Serializer\Normalizer\NormalizerInterface $valueNormalizer)
    {
        static $reflection;
        if (! $this->valueHolder5c5843848854d597145407) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer');
            $this->valueHolder5c5843848854d597145407 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);
        }
        $this->valueHolder5c5843848854d597145407->__construct($valueNormalizer);
    }
    public function & __get($name)
    {
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, '__get', ['name' => $name], $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        if (isset(self::$publicProperties5c58438488516327543546[$name])) {
            return $this->valueHolder5c5843848854d597145407->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5843848854d597145407;
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
        $targetObject = $this->valueHolder5c5843848854d597145407;
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
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5843848854d597145407;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c5843848854d597145407;
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
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, '__isset', array('name' => $name), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5843848854d597145407;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5843848854d597145407;
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
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, '__unset', array('name' => $name), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5843848854d597145407;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5843848854d597145407;
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
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, '__clone', array(), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        $this->valueHolder5c5843848854d597145407 = clone $this->valueHolder5c5843848854d597145407;
    }
    public function __sleep()
    {
        $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, '__sleep', array(), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
        return array('valueHolder5c5843848854d597145407');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Storage\Product\ProductValuesNormalizer $instance) {
            unset($instance->valueNormalizer);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Storage\\Product\\ProductValuesNormalizer')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c5843848855d952743627 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c5843848855d952743627;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c5843848855d952743627 && ($this->initializer5c5843848855d952743627->__invoke($valueHolder5c5843848854d597145407, $this, 'initializeProxy', array(), $this->initializer5c5843848855d952743627) || 1) && $this->valueHolder5c5843848854d597145407 = $valueHolder5c5843848854d597145407;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c5843848854d597145407;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c5843848854d597145407;
    }
}
