<?php
class Bootstrap extends \Yaf\Bootstrap_Abstract
{
    public function _initConfig()
    {
        $arrConfig = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $arrConfig);
    }

    public function _initRouter(\Yaf\Dispatcher $dispatcher)
    {
        // \Yaf\Application::app()->getConfig()->application->modules;
        $dispatcher->getRouter()->addRoute(
            'name',
            new \Yaf\Route\Rewrite(
                '/default',
                array(
                    'controller' => 'index',
                    'module' => 'default',
                    'action' => 'index'
                )
            )
        );
    }

    public function _initView(\Yaf\Dispatcher $dispatcher)
    {
        $twig = new \Afera\View\Twig();
        $dispatcher->setView($twig);
    }
}