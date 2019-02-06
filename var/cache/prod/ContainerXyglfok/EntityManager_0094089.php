<?php

class EntityManager_0094089 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c58438472e06620318329 = null;
    private $initializer5c58438472e18419715389 = null;
    private static $publicProperties5c58438472da3554087462 = [
        
    ];
    public function getConnection()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getConnection', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getMetadataFactory', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getExpressionBuilder', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'beginTransaction', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getCache', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'transactional', array('func' => $func), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->transactional($func);
    }
    public function commit()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'commit', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->commit();
    }
    public function rollback()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'rollback', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getClassMetadata', array('className' => $className), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'createQuery', array('dql' => $dql), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'createNamedQuery', array('name' => $name), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'createQueryBuilder', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'flush', array('entity' => $entity), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'clear', array('entityName' => $entityName), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->clear($entityName);
    }
    public function close()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'close', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->close();
    }
    public function persist($entity)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'persist', array('entity' => $entity), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'remove', array('entity' => $entity), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'refresh', array('entity' => $entity), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'detach', array('entity' => $entity), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'merge', array('entity' => $entity), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'contains', array('entity' => $entity), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getEventManager', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getConfiguration', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'isOpen', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getUnitOfWork', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getProxyFactory', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'initializeObject', array('obj' => $obj), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'getFilters', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'isFiltersStateClean', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'hasFilters', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return $this->valueHolder5c58438472e06620318329->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5c58438472e18419715389 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5c58438472e06620318329) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c58438472e06620318329 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5c58438472e06620318329->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, '__get', ['name' => $name], $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        if (isset(self::$publicProperties5c58438472da3554087462[$name])) {
            return $this->valueHolder5c58438472e06620318329->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438472e06620318329;
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
        $targetObject = $this->valueHolder5c58438472e06620318329;
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
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438472e06620318329;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c58438472e06620318329;
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
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, '__isset', array('name' => $name), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438472e06620318329;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c58438472e06620318329;
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
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, '__unset', array('name' => $name), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c58438472e06620318329;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c58438472e06620318329;
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
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, '__clone', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        $this->valueHolder5c58438472e06620318329 = clone $this->valueHolder5c58438472e06620318329;
    }
    public function __sleep()
    {
        $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, '__sleep', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
        return array('valueHolder5c58438472e06620318329');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c58438472e18419715389 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c58438472e18419715389;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c58438472e18419715389 && ($this->initializer5c58438472e18419715389->__invoke($valueHolder5c58438472e06620318329, $this, 'initializeProxy', array(), $this->initializer5c58438472e18419715389) || 1) && $this->valueHolder5c58438472e06620318329 = $valueHolder5c58438472e06620318329;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c58438472e06620318329;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c58438472e06620318329;
    }
}
