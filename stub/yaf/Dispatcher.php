<?php

namespace Yaf;

final class Dispatcher
{
    /**
     * @var $_router
     */
    protected $_router;

    /**
     * @var $_view
     */
    protected $_view;

    /**
     * @var $_request
     */
    protected $_request;

    /**
     * @var $_plugins
     */
    protected $_plugins;

    /**
     * @static
     *
     * @var $_instance
     */
    protected static $_instance;

    /**
     * @var $_auto_render
     */
    protected $_auto_render;

    /**
     * @var $_return_response
     */
    protected $_return_response;

    /**
     * @var $_instantly_flush
     */
    protected $_instantly_flush;

    /**
     * @var $_default_module
     */
    protected $_default_module;

    /**
     * @var $_default_controller
     */
    protected $_default_controller;

    /**
     * @var $_default_action
     */
    protected $_default_action;

    /**
     * @return
     */
    private function __construct ()
    {
    }

    /**
     * @return
     */
    public function __clone ()
    {
    }

    /**
     * @return
     */
    public function __sleep ()
    {
    }

    /**
     * @return
     */
    public function __wakeup ()
    {
    }

    /**
     * @return
     */
    public function enableView ()
    {
    }

    /**
     * @return
     */
    public function disableView ()
    {
    }

    /**
     * @param $templates_dir
     * @param $options
     *
     * @return
     */
    public function initView ( $templates_dir, $options )
    {
    }

    /**
     * @param $view
     *
     * @return
     */
    public function setView ( $view )
    {
    }

    /**
     * @param $request
     *
     * @return
     */
    public function setRequest ( $request )
    {
    }

    /**
     * @return
     */
    public function getApplication ()
    {
    }

    /**
     * @return \Yaf\Router
     */
    public function getRouter ()
    {
    }

    /**
     * @return
     */
    public function getRequest ()
    {
    }

    /**
     * @param $callback
     * @param $error_types
     *
     * @return
     */
    public function setErrorHandler ( $callback, $error_types )
    {
    }

    /**
     * @param $module
     *
     * @return
     */
    public function setDefaultModule ( $module )
    {
    }

    /**
     * @param $controller
     *
     * @return
     */
    public function setDefaultController ( $controller )
    {
    }

    /**
     * @param $action
     *
     * @return
     */
    public function setDefaultAction ( $action )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function returnResponse ( $flag )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function autoRender ( $flag )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function flushInstantly ( $flag )
    {
    }

    /**
     * @static
     * @return
     */
    public static function getInstance ()
    {
    }

    /**
     * @param $request
     *
     * @return
     */
    public function dispatch ( $request )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function throwException ( $flag )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function catchException ( $flag )
    {
    }

    /**
     * @param $plugin
     *
     * @return
     */
    public function registerPlugin ( $plugin )
    {
    }
}