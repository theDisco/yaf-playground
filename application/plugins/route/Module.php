<?php

namespace Route;

class ModulePlugin extends \Yaf\Plugin_Abstract
{

    public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        $dispatcher = \Yaf\Application::app()->getDispatcher();
        $config = \Yaf\Registry::get(\Bootstrap::CONFIG_REGISTRY_KEY);
        $modules = explode(',', $config->application->modules);

        foreach ($modules as $module) {
            $module = trim($module);

            $dispatcher->getRouter()->addRoute(
                'module_' . $module,
                new \Yaf\Route\Rewrite(
                    '/' . $module,
                    array(
                        'controller' => 'index',
                        'module' => $module,
                        'action' => 'index'
                    )
                )
            );
        }
    }

}
