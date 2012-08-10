<?php

namespace Yaf;

abstract class Controller_Abstract
{
    /**
     * @var $actions
     */
    public $actions;

    /**
     * @var $_module
     */
    protected $_module;

    /**
     * @var $_name
     */
    protected $_name;

    /**
     * @var $_request
     */
    protected $_request;

    /**
     * @var $_response
     */
    protected $_response;

    /**
     * @var $_invoke_args
     */
    protected $_invoke_args;

    /**
     * @var $_view
     */
    protected $_view;

    /**
     * @final
     *
     * @param $tpl
     * @param $parameters
     *
     * @return
     */
    protected final function render ( $tpl, $parameters )
    {
    }

    /**
     * @final
     *
     * @param $tpl
     * @param $parameters
     *
     * @return
     */
    protected final function display ( $tpl, $parameters )
    {
    }

    /**
     * @final
     * @return
     */
    public final function getRequest ()
    {
    }

    /**
     * @final
     * @return
     */
    public final function getResponse ()
    {
    }

    /**
     * @final
     * @return
     */
    public final function getModuleName ()
    {
    }

    /**
     * @final
     *
     * @return \Yaf\View_Interface
     */
    public final function getView ()
    {
    }

    /**
     * @final
     *
     * @param $options
     *
     * @return
     */
    public final function initView ( $options )
    {
    }

    /**
     * @final
     *
     * @param $view_directory
     *
     * @return
     */
    public final function setViewpath ( $view_directory )
    {
    }

    /**
     * @final
     * @return
     */
    public final function getViewpath ()
    {
    }

    /**
     * @final
     *
     * @param $module
     * @param $controller
     * @param $action
     * @param $paramters
     *
     * @return
     */
    public final function forward ( $module, $controller, $action, $paramters )
    {
    }

    /**
     * @final
     *
     * @param $url
     *
     * @return
     */
    public final function redirect ( $url )
    {
    }

    /**
     * @final
     * @return
     */
    public final function getInvokeArgs ()
    {
    }

    /**
     * @final
     *
     * @param $name
     *
     * @return
     */
    public final function getInvokeArg ( $name )
    {
    }

    /**
     * @final
     * @return
     */
    public final function __construct ()
    {
    }

    /**
     * @final
     * @return
     */
    public final function __clone ()
    {
    }
}