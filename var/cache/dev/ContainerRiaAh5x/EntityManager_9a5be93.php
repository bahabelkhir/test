<?php

namespace ContainerRiaAh5x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd2cb4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer100fb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc45ac = [
        
    ];

    public function getConnection()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getConnection', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getMetadataFactory', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getExpressionBuilder', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'beginTransaction', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getCache', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'transactional', array('func' => $func), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'commit', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->commit();
    }

    public function rollback()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'rollback', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getClassMetadata', array('className' => $className), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'createQuery', array('dql' => $dql), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'createNamedQuery', array('name' => $name), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'createQueryBuilder', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'flush', array('entity' => $entity), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'clear', array('entityName' => $entityName), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->clear($entityName);
    }

    public function close()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'close', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->close();
    }

    public function persist($entity)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'persist', array('entity' => $entity), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'remove', array('entity' => $entity), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'refresh', array('entity' => $entity), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'detach', array('entity' => $entity), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'merge', array('entity' => $entity), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'contains', array('entity' => $entity), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getEventManager', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getConfiguration', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'isOpen', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getUnitOfWork', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getProxyFactory', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'initializeObject', array('obj' => $obj), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'getFilters', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'isFiltersStateClean', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'hasFilters', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return $this->valueHolderd2cb4->hasFilters();
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

        $instance->initializer100fb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd2cb4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd2cb4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd2cb4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, '__get', ['name' => $name], $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        if (isset(self::$publicPropertiesc45ac[$name])) {
            return $this->valueHolderd2cb4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2cb4;

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

        $targetObject = $this->valueHolderd2cb4;
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
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2cb4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd2cb4;
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
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, '__isset', array('name' => $name), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2cb4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd2cb4;
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
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, '__unset', array('name' => $name), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2cb4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd2cb4;
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
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, '__clone', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        $this->valueHolderd2cb4 = clone $this->valueHolderd2cb4;
    }

    public function __sleep()
    {
        $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, '__sleep', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;

        return array('valueHolderd2cb4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer100fb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer100fb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer100fb && ($this->initializer100fb->__invoke($valueHolderd2cb4, $this, 'initializeProxy', array(), $this->initializer100fb) || 1) && $this->valueHolderd2cb4 = $valueHolderd2cb4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2cb4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2cb4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
