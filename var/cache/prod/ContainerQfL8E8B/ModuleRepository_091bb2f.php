<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8ba14 = null;
    private $initializerd2bb8 = null;
    private static $publicProperties0847f = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getList', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getInstalledModules', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getMustBeConfiguredModules', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getUpgradableModules', array(), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'setActionUrls', array('collection' => $collection), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        return $this->valueHolder8ba14->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerd2bb8 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder8ba14) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder8ba14 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder8ba14->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerd2bb8 && ($this->initializerd2bb8->__invoke($valueHolder8ba14, $this, '__get', ['name' => $name], $this->initializerd2bb8) || 1) && $this->valueHolder8ba14 = $valueHolder8ba14;
        if (isset(self::$publicProperties0847f[$name])) {
            return $this->valueHolder8ba14->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
