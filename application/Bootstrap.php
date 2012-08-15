<?php
/**
 * @package yaf-playground
 * @author Wojtek Gancarczyk <info@aferalabs.com>
 */
class Bootstrap extends \Yaf\Bootstrap_Abstract
{
    const CONFIG_REGISTRY_KEY = 'config';

    /**
     * @return void
     */
    public function _initConfig()
    {
        $arrConfig = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set(static::CONFIG_REGISTRY_KEY, $arrConfig);
    }

    /**
     * @param Yaf\Dispatcher $dispatcher
     *
     * @return void
     */
    public function _initPlugins(\Yaf\Dispatcher $dispatcher)
    {
        $dispatcher->registerPlugin(new \Route\ModulePlugin());
        $dispatcher->registerPlugin(new \Intl\LocalePlugin());
        $dispatcher->registerPlugin(new \Intl\ResourceBundlePlugin());
    }

    /**
     * @param Yaf\Dispatcher $dispatcher
     *
     * @return void
     */
    public function _initView(\Yaf\Dispatcher $dispatcher)
    {
        $twig = new \Afera\View\Twig();
        $dispatcher->setView($twig);
    }

    /**
     * @return void
     */
    public function _initSession()
    {
        \Yaf\Session::getInstance()->start();
        // TODO add a different save handler once the orn setup is done
    }
}