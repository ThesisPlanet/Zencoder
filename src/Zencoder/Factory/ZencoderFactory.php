<?php
namespace Zencoder\Factory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ZencoderFactory implements FactoryInterface
{

    const CONFIGURATION_NOT_SET = "You must first configure the Zencoder module by copying over zencoder.local.dist.php to the autoload folder.";

    const API_KEY_NOT_SET = "An API key has not been set in the zencoder configuration file. Please correct that and this message will go away.";
    /*
     * (non-PHPdoc) @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService (ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        if (! array_key_exists('zencoder', $config)) {
            throw new \exception(self::CONFIGURATION_NOT_SET);
        }
        if (null == $config['zencoder']['api_key']) {
            throw new \exception(self::API_KEY_NOT_SET);
        } else {
            $api_key = $config['zencoder']['api_key'];
        }
        
        $zencoderService = new \Services_Zencoder($api_key);
        
        return $zencoderService;
    }
}