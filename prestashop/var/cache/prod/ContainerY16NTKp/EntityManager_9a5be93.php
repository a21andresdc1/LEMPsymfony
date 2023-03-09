<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2f746 = null;
    private $initializerc8d36 = null;
    private static $publicProperties202e4 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getConnection', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getMetadataFactory', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getExpressionBuilder', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'beginTransaction', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getCache', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'transactional', array('func' => $func), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'commit', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->commit();
    }
    public function rollback()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'rollback', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getClassMetadata', array('className' => $className), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'createQuery', array('dql' => $dql), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'createNamedQuery', array('name' => $name), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'createQueryBuilder', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'flush', array('entity' => $entity), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'clear', array('entityName' => $entityName), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->clear($entityName);
    }
    public function close()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'close', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->close();
    }
    public function persist($entity)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'persist', array('entity' => $entity), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'remove', array('entity' => $entity), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'refresh', array('entity' => $entity), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'detach', array('entity' => $entity), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'merge', array('entity' => $entity), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'contains', array('entity' => $entity), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getEventManager', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getConfiguration', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'isOpen', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getUnitOfWork', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getProxyFactory', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'initializeObject', array('obj' => $obj), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'getFilters', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'isFiltersStateClean', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'hasFilters', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return $this->valueHolder2f746->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc8d36 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2f746) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2f746 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2f746->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, '__get', ['name' => $name], $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        if (isset(self::$publicProperties202e4[$name])) {
            return $this->valueHolder2f746->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f746;
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
        $targetObject = $this->valueHolder2f746;
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
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f746;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2f746;
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
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, '__isset', array('name' => $name), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f746;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2f746;
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
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, '__unset', array('name' => $name), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2f746;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2f746;
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
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, '__clone', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        $this->valueHolder2f746 = clone $this->valueHolder2f746;
    }
    public function __sleep()
    {
        $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, '__sleep', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
        return array('valueHolder2f746');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc8d36 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc8d36;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc8d36 && ($this->initializerc8d36->__invoke($valueHolder2f746, $this, 'initializeProxy', array(), $this->initializerc8d36) || 1) && $this->valueHolder2f746 = $valueHolder2f746;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2f746;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2f746;
    }
}
