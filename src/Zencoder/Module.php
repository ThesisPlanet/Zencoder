<?php
namespace Zencoder;
use Zend\Loader\StandardAutoloader;
use Zend\Loader\AutoloaderFactory;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Module class
 *
 * @category AssetManager
 * @package AssetManager
 */
class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{

    /**
     * {@inheritDoc}
     */
    public function getAutoloaderConfig ()
    {
        return array(
                AutoloaderFactory::STANDARD_AUTOLOADER => array(
                        StandardAutoloader::LOAD_NS => array(
                                __NAMESPACE__ => __DIR__
                        )
                )
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getConfig ()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}