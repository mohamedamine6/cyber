<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf0623 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc9974 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbcbf5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getConnection', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getMetadataFactory', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getExpressionBuilder', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'beginTransaction', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getCache', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'transactional', array('func' => $func), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'commit', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->commit();
    }

    public function rollback()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'rollback', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getClassMetadata', array('className' => $className), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'createQuery', array('dql' => $dql), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'createNamedQuery', array('name' => $name), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'createQueryBuilder', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'flush', array('entity' => $entity), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'clear', array('entityName' => $entityName), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->clear($entityName);
    }

    public function close()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'close', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->close();
    }

    public function persist($entity)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'persist', array('entity' => $entity), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'remove', array('entity' => $entity), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'refresh', array('entity' => $entity), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'detach', array('entity' => $entity), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'merge', array('entity' => $entity), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'contains', array('entity' => $entity), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getEventManager', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getConfiguration', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'isOpen', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getUnitOfWork', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getProxyFactory', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'initializeObject', array('obj' => $obj), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'getFilters', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'isFiltersStateClean', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'hasFilters', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return $this->valueHolderf0623->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc9974 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf0623) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0623 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf0623->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, '__get', ['name' => $name], $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        if (isset(self::$publicPropertiesbcbf5[$name])) {
            return $this->valueHolderf0623->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0623;

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

        $targetObject = $this->valueHolderf0623;
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
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0623;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0623;
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
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, '__isset', array('name' => $name), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0623;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf0623;
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
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, '__unset', array('name' => $name), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0623;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf0623;
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
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, '__clone', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        $this->valueHolderf0623 = clone $this->valueHolderf0623;
    }

    public function __sleep()
    {
        $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, '__sleep', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;

        return array('valueHolderf0623');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc9974 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc9974;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc9974 && ($this->initializerc9974->__invoke($valueHolderf0623, $this, 'initializeProxy', array(), $this->initializerc9974) || 1) && $this->valueHolderf0623 = $valueHolderf0623;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0623;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0623;
    }
}
