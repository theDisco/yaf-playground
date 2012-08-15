<?php

namespace Intl;

class LocalePlugin extends \Yaf\Plugin_Abstract
{
    public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
        $client = \Locale::acceptFromHttp(getenv('HTTP_ACCEPT_LANGUAGE'));
        $config = \Yaf\Registry::get(\Bootstrap::CONFIG_REGISTRY_KEY);
        $languages = array();

        if (null !== $config->locale->languages) {
            $languages = array_map(function($language) {
                return trim($language);
            }, explode(',', $config->locale->languages));
        }

        $locale = \Locale::lookup($languages, $client, false, 'en');
        \Locale::setDefault($locale);
        setlocale(LC_ALL, $locale . '.utf-8');
    }
}