<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8ba14 = null;
    private $initializerd2bb8 = null;
    private static $publicProperties0847f = [
        
    ];
    public function getConnection()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getConnection', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getMetadataFactory', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getExpressionBuilder', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'beginTransaction', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getCache', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'transactional', array('func' => $func), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'commit', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->commit();
    }
    public function rollback()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'rollback', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getClassMetadata', array('className' => $className), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'createQuery', array('dql' => $dql), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'createNamedQuery', array('name' => $name), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'createQueryBuilder', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'flush', array('entity' => $entity), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'clear', array('entityName' => $entityName), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->clear($entityName);
    }
    public function close()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'close', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->close();
    }
    public function persist($entity)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'persist', array('entity' => $entity), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'remove', array('entity' => $entity), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'refresh', array('entity' => $entity), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'detach', array('entity' => $entity), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'merge', array('entity' => $entity), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'contains', array('entity' => $entity), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getEventManager', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getConfiguration', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'isOpen', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getUnitOfWork', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getProxyFactory', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'initializeObject', array('obj' => $obj), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getFilters', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'isFiltersStateClean', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'hasFilters', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd2bb8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8ba14) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ba14 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8ba14->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, '__get', ['name' => $name], $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        if (isset(self::$publicProperties0847f[$name])) {
            return $this->valueHolder8ba14->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba14;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8ba14;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba14;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8ba14;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, '__isset', array('name' => $name), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba14;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8ba14;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, '__unset', array('name' => $name), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba14;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8ba14;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, '__clone', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        $this->valueHolder8ba14 = clone $this->valueHolder8ba14;
    }
    public function __sleep()
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, '__sleep', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return array('valueHolder8ba14');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd2bb8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd2bb8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'initializeProxy', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ba14;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ba14;
    }
}
