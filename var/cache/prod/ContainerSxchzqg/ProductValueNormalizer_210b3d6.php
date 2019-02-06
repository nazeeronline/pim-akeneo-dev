<?php

class ProductValueNormalizer_210b3d6 extends \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c5845f0678f4438332765 = null;
    private $initializer5c5845f067902481452626 = null;
    private static $publicProperties5c5845f0678bb335261459 = [
        
    ];
    public function normalize($entity, $format = null, array $context = []) : array
    {
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, 'normalize', array('entity' => $entity, 'format' => $format, 'context' => $context), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        return $this->valueHolder5c5845f0678f4438332765->normalize($entity, $format, $context);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, 'supportsNormalization', array('data' => $data, 'format' => $format), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        return $this->valueHolder5c5845f0678f4438332765->supportsNormalization($data, $format);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $instance, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($instance);
        $instance->initializer5c5845f067902481452626 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\Serializer\Normalizer\NormalizerInterface $normalizer, \Akeneo\Tool\Component\StorageUtils\Repository\IdentifiableObjectRepositoryInterface $attributeRepository)
    {
        static $reflection;
        if (! $this->valueHolder5c5845f0678f4438332765) {
            $reflection = $reflection ?: new \ReflectionClass('Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer');
            $this->valueHolder5c5845f0678f4438332765 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($this);
        }
        $this->valueHolder5c5845f0678f4438332765->__construct($normalizer, $attributeRepository);
    }
    public function & __get($name)
    {
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, '__get', ['name' => $name], $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        if (isset(self::$publicProperties5c5845f0678bb335261459[$name])) {
            return $this->valueHolder5c5845f0678f4438332765->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0678f4438332765;
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
        $targetObject = $this->valueHolder5c5845f0678f4438332765;
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
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0678f4438332765;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c5845f0678f4438332765;
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
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, '__isset', array('name' => $name), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0678f4438332765;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f0678f4438332765;
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
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, '__unset', array('name' => $name), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0678f4438332765;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f0678f4438332765;
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
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, '__clone', array(), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        $this->valueHolder5c5845f0678f4438332765 = clone $this->valueHolder5c5845f0678f4438332765;
    }
    public function __sleep()
    {
        $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, '__sleep', array(), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
        return array('valueHolder5c5845f0678f4438332765');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer $instance) {
            unset($instance->normalizer, $instance->attributeRepository);
        }, $this, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Normalizer\\Standard\\Product\\ProductValueNormalizer')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c5845f067902481452626 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c5845f067902481452626;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c5845f067902481452626 && ($this->initializer5c5845f067902481452626->__invoke($valueHolder5c5845f0678f4438332765, $this, 'initializeProxy', array(), $this->initializer5c5845f067902481452626) || 1) && $this->valueHolder5c5845f0678f4438332765 = $valueHolder5c5845f0678f4438332765;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c5845f0678f4438332765;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c5845f0678f4438332765;
    }
}
