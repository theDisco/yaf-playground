<?php

namespace Yaf;

abstract class Request_Abstract
{
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';

    /**
     * @var $module
     */
    public $module;

    /**
     * @var $controller
     */
    public $controller;

    /**
     * @var $action
     */
    public $action;

    /**
     * @var $method
     */
    public $method;

    /**
     * @var $params
     */
    protected $params;

    /**
     * @var $language
     */
    protected $language;

    /**
     * @var $_exception
     */
    protected $_exception;

    /**
     * @var $_base_uri
     */
    protected $_base_uri;

    /**
     * @var $uri
     */
    protected $uri;

    /**
     * @var $dispatched
     */
    protected $dispatched;

    /**
     * @var $routed
     */
    protected $routed;

    /**
     * @return
     */
    public function isGet ()
    {
    }

    /**
     * @return
     */
    public function isPost ()
    {
    }

    /**
     * @return
     */
    public function isPut ()
    {
    }

    /**
     * @return
     */
    public function isHead ()
    {
    }

    /**
     * @return
     */
    public function isOptions ()
    {
    }

    /**
     * @return
     */
    public function isCli ()
    {
    }

    /**
     * @return
     */
    public function isXmlHttpRequest ()
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getServer ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getEnv ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function setParam ( $name, $value )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getParam ( $name, $default )
    {
    }

    /**
     * @return
     */
    public function getParams ()
    {
    }

    /**
     * @return
     */
    public function getException ()
    {
    }

    /**
     * @return
     */
    public function getModuleName ()
    {
    }

    /**
     * @return
     */
    public function getControllerName ()
    {
    }

    /**
     * @return
     */
    public function getActionName ()
    {
    }

    /**
     * @param $module
     *
     * @return
     */
    public function setModuleName ( $module )
    {
    }

    /**
     * @param $controller
     *
     * @return
     */
    public function setControllerName ( $controller )
    {
    }

    /**
     * @param $action
     *
     * @return
     */
    public function setActionName ( $action )
    {
    }

    /**
     * @return
     */
    public function getMethod ()
    {
    }

    /**
     * @return
     */
    public function getLanguage ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setBaseUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function getBaseUri ()
    {
    }

    /**
     * @return
     */
    public function getRequestUri ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setRequestUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function isDispatched ()
    {
    }

    /**
     * @return
     */
    public function setDispatched ()
    {
    }

    /**
     * @return
     */
    public function isRouted ()
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function setRouted ( $flag )
    {
    }
}