<?php

namespace ContainerI5SyrdW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0411a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer22b00 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07313 = [
        
    ];

    public function getConnection()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getConnection', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getMetadataFactory', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getExpressionBuilder', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'beginTransaction', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getCache', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'transactional', array('func' => $func), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'commit', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->commit();
    }

    public function rollback()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'rollback', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getClassMetadata', array('className' => $className), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'createQuery', array('dql' => $dql), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'createNamedQuery', array('name' => $name), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'createQueryBuilder', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'flush', array('entity' => $entity), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'clear', array('entityName' => $entityName), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->clear($entityName);
    }

    public function close()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'close', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->close();
    }

    public function persist($entity)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'persist', array('entity' => $entity), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'remove', array('entity' => $entity), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'refresh', array('entity' => $entity), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'detach', array('entity' => $entity), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'merge', array('entity' => $entity), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'contains', array('entity' => $entity), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getEventManager', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getConfiguration', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'isOpen', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getUnitOfWork', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getProxyFactory', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'initializeObject', array('obj' => $obj), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'getFilters', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'isFiltersStateClean', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'hasFilters', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return $this->valueHolder0411a->hasFilters();
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

        $instance->initializer22b00 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0411a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0411a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0411a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, '__get', ['name' => $name], $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        if (isset(self::$publicProperties07313[$name])) {
            return $this->valueHolder0411a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0411a;

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

        $targetObject = $this->valueHolder0411a;
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
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0411a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0411a;
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
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, '__isset', array('name' => $name), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0411a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0411a;
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
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, '__unset', array('name' => $name), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0411a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0411a;
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
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, '__clone', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        $this->valueHolder0411a = clone $this->valueHolder0411a;
    }

    public function __sleep()
    {
        $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, '__sleep', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;

        return array('valueHolder0411a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer22b00 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer22b00;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer22b00 && ($this->initializer22b00->__invoke($valueHolder0411a, $this, 'initializeProxy', array(), $this->initializer22b00) || 1) && $this->valueHolder0411a = $valueHolder0411a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0411a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0411a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
