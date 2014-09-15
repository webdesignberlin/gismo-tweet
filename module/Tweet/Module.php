<?php
/**
 *
 */
namespace Tweet;
/**
 * Class Module
 * @package Tweet
 */
class Module
{
    public function onBootstrap()
    {
    }

    /**
     * @return mixed
     */

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * getAutoloaderConfig
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/',
                ],
            ],
        ];
    }

    /**
     * getServiceConfig
     *
     * @return array
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
            ]
        ];
    }
}
