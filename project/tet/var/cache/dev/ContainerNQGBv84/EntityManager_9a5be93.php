<?php

namespace ContainerNQGBv84;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder06490 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4fc1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0f2b = [
        
    ];

    public function getConnection()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getConnection', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getMetadataFactory', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getExpressionBuilder', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'beginTransaction', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getCache', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'transactional', array('func' => $func), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'commit', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->commit();
    }

    public function rollback()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'rollback', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getClassMetadata', array('className' => $className), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'createQuery', array('dql' => $dql), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'createNamedQuery', array('name' => $name), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'createQueryBuilder', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'flush', array('entity' => $entity), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'clear', array('entityName' => $entityName), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->clear($entityName);
    }

    public function close()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'close', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->close();
    }

    public function persist($entity)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'persist', array('entity' => $entity), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'remove', array('entity' => $entity), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'refresh', array('entity' => $entity), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'detach', array('entity' => $entity), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'merge', array('entity' => $entity), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'contains', array('entity' => $entity), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getEventManager', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getConfiguration', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'isOpen', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getUnitOfWork', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getProxyFactory', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'initializeObject', array('obj' => $obj), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'getFilters', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'isFiltersStateClean', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'hasFilters', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return $this->valueHolder06490->hasFilters();
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

        $instance->initializerb4fc1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder06490) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder06490 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder06490->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, '__get', ['name' => $name], $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        if (isset(self::$publicPropertiesf0f2b[$name])) {
            return $this->valueHolder06490->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06490;

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

        $targetObject = $this->valueHolder06490;
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
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06490;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder06490;
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
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, '__isset', array('name' => $name), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06490;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder06490;
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
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, '__unset', array('name' => $name), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06490;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder06490;
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
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, '__clone', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        $this->valueHolder06490 = clone $this->valueHolder06490;
    }

    public function __sleep()
    {
        $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, '__sleep', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;

        return array('valueHolder06490');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb4fc1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb4fc1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb4fc1 && ($this->initializerb4fc1->__invoke($valueHolder06490, $this, 'initializeProxy', array(), $this->initializerb4fc1) || 1) && $this->valueHolder06490 = $valueHolder06490;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder06490;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder06490;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
