<?php

namespace Intl;

class ResourceBundlePlugin extends \Yaf\Plugin_Abstract
{
    const CONFIG_REGISTRY_KEY = 'bundle';

    public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        $config = \Yaf\Registry::get(\Bootstrap::CONFIG_REGISTRY_KEY);

        if ($config->bundle->enable) {
            $path = APPLICATION_PATH . '/resources';

            if (null !== $config->bundle->path) {
                $path = $config->bundle->path;
            }

            $locale = \Locale::getDefault();
            $bundle = \ResourceBundle::create($locale, $path);
            \Yaf\Registry::set(static::CONFIG_REGISTRY_KEY, $bundle);
        }
    }
}