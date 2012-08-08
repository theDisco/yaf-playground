<?php
class Bootstrap extends \Yaf\Bootstrap_Abstract
{
    public function _initConfig(\Yaf\Dispatcher $dispatcher)
    {
        $arrConfig = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $arrConfig);
    }

    public function _initRouter(\Yaf\Dispatcher $dispatcher)
    {
        // var_dump(\Yaf\Application::app()->getConfig()->application->modules);
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
}