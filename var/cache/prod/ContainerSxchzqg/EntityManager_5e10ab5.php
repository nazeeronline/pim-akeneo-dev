<?php

class EntityManager_5e10ab5 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c5845f0336fb283829903 = null;
    private $initializer5c5845f03371a496467694 = null;
    private static $publicProperties5c5845f0317e5104748343 = [
        
    ];
    public function getConnection()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getConnection', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getMetadataFactory', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getExpressionBuilder', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'beginTransaction', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getCache', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'transactional', array('func' => $func), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->transactional($func);
    }
    public function commit()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'commit', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->commit();
    }
    public function rollback()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'rollback', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getClassMetadata', array('className' => $className), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'createQuery', array('dql' => $dql), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'createNamedQuery', array('name' => $name), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'createQueryBuilder', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'flush', array('entity' => $entity), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'clear', array('entityName' => $entityName), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->clear($entityName);
    }
    public function close()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'close', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->close();
    }
    public function persist($entity)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'persist', array('entity' => $entity), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'remove', array('entity' => $entity), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'refresh', array('entity' => $entity), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'detach', array('entity' => $entity), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'merge', array('entity' => $entity), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'contains', array('entity' => $entity), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getEventManager', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getConfiguration', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'isOpen', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getUnitOfWork', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getProxyFactory', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'initializeObject', array('obj' => $obj), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'getFilters', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'isFiltersStateClean', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'hasFilters', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return $this->valueHolder5c5845f0336fb283829903->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5c5845f03371a496467694 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5c5845f0336fb283829903) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c5845f0336fb283829903 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5c5845f0336fb283829903->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, '__get', ['name' => $name], $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        if (isset(self::$publicProperties5c5845f0317e5104748343[$name])) {
            return $this->valueHolder5c5845f0336fb283829903->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0336fb283829903;
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
        $targetObject = $this->valueHolder5c5845f0336fb283829903;
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
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0336fb283829903;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5c5845f0336fb283829903;
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
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, '__isset', array('name' => $name), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0336fb283829903;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f0336fb283829903;
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
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, '__unset', array('name' => $name), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c5845f0336fb283829903;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c5845f0336fb283829903;
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
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, '__clone', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        $this->valueHolder5c5845f0336fb283829903 = clone $this->valueHolder5c5845f0336fb283829903;
    }
    public function __sleep()
    {
        $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, '__sleep', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
        return array('valueHolder5c5845f0336fb283829903');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5c5845f03371a496467694 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5c5845f03371a496467694;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5c5845f03371a496467694 && ($this->initializer5c5845f03371a496467694->__invoke($valueHolder5c5845f0336fb283829903, $this, 'initializeProxy', array(), $this->initializer5c5845f03371a496467694) || 1) && $this->valueHolder5c5845f0336fb283829903 = $valueHolder5c5845f0336fb283829903;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c5845f0336fb283829903;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c5845f0336fb283829903;
    }
}
