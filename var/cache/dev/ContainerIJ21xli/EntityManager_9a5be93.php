<?php

namespace ContainerIJ21xli;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1548c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer62dd8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseece9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getConnection', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getMetadataFactory', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getExpressionBuilder', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'beginTransaction', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getCache', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'transactional', array('func' => $func), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->transactional($func);
    }

    public function commit()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'commit', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->commit();
    }

    public function rollback()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'rollback', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getClassMetadata', array('className' => $className), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'createQuery', array('dql' => $dql), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'createNamedQuery', array('name' => $name), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'createQueryBuilder', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'flush', array('entity' => $entity), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'clear', array('entityName' => $entityName), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->clear($entityName);
    }

    public function close()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'close', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->close();
    }

    public function persist($entity)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'persist', array('entity' => $entity), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'remove', array('entity' => $entity), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'refresh', array('entity' => $entity), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'detach', array('entity' => $entity), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'merge', array('entity' => $entity), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'contains', array('entity' => $entity), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getEventManager', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getConfiguration', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'isOpen', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getUnitOfWork', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getProxyFactory', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'initializeObject', array('obj' => $obj), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'getFilters', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'isFiltersStateClean', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'hasFilters', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return $this->valueHolder1548c->hasFilters();
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

        $instance->initializer62dd8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1548c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1548c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1548c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, '__get', ['name' => $name], $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        if (isset(self::$publicPropertieseece9[$name])) {
            return $this->valueHolder1548c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1548c;

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

        $targetObject = $this->valueHolder1548c;
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
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1548c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1548c;
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
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, '__isset', array('name' => $name), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1548c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1548c;
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
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, '__unset', array('name' => $name), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1548c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1548c;
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
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, '__clone', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        $this->valueHolder1548c = clone $this->valueHolder1548c;
    }

    public function __sleep()
    {
        $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, '__sleep', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;

        return array('valueHolder1548c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer62dd8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer62dd8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer62dd8 && ($this->initializer62dd8->__invoke($valueHolder1548c, $this, 'initializeProxy', array(), $this->initializer62dd8) || 1) && $this->valueHolder1548c = $valueHolder1548c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1548c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1548c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
