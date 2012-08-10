<?php
class Bootstrap extends \Yaf\Bootstrap_Abstract
{
    const CONFIG_REGISTRY_KEY = 'config';

    public function _initConfig()
    {
        $arrConfig = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set(static::CONFIG_REGISTRY_KEY, $arrConfig);
    }

    public function _initPlugins(\Yaf\Dispatcher $dispatcher)
    {
        $dispatcher->registerPlugin(new \Route\ModulePlugin());
    }

    public function _initView(\Yaf\Dispatcher $dispatcher)
    {
        $twig = new \Afera\View\Twig();
        $dispatcher->setView($twig);
    }
}