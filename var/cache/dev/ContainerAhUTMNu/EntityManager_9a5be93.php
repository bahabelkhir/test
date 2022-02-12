<?php

namespace ContainerAhUTMNu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9d6cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6c57f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4409b = [
        
    ];

    public function getConnection()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getConnection', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getMetadataFactory', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getExpressionBuilder', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'beginTransaction', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getCache', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'transactional', array('func' => $func), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'commit', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->commit();
    }

    public function rollback()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'rollback', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getClassMetadata', array('className' => $className), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'createQuery', array('dql' => $dql), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'createNamedQuery', array('name' => $name), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'createQueryBuilder', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'flush', array('entity' => $entity), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'clear', array('entityName' => $entityName), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->clear($entityName);
    }

    public function close()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'close', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->close();
    }

    public function persist($entity)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'persist', array('entity' => $entity), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'remove', array('entity' => $entity), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'refresh', array('entity' => $entity), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'detach', array('entity' => $entity), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'merge', array('entity' => $entity), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'contains', array('entity' => $entity), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getEventManager', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getConfiguration', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'isOpen', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getUnitOfWork', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getProxyFactory', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'initializeObject', array('obj' => $obj), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'getFilters', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'isFiltersStateClean', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'hasFilters', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return $this->valueHolder9d6cf->hasFilters();
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

        $instance->initializer6c57f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9d6cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9d6cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9d6cf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, '__get', ['name' => $name], $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        if (isset(self::$publicProperties4409b[$name])) {
            return $this->valueHolder9d6cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d6cf;

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

        $targetObject = $this->valueHolder9d6cf;
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
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d6cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9d6cf;
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
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, '__isset', array('name' => $name), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d6cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9d6cf;
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
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, '__unset', array('name' => $name), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d6cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9d6cf;
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
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, '__clone', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        $this->valueHolder9d6cf = clone $this->valueHolder9d6cf;
    }

    public function __sleep()
    {
        $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, '__sleep', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;

        return array('valueHolder9d6cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6c57f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6c57f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6c57f && ($this->initializer6c57f->__invoke($valueHolder9d6cf, $this, 'initializeProxy', array(), $this->initializer6c57f) || 1) && $this->valueHolder9d6cf = $valueHolder9d6cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9d6cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9d6cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
