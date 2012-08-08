<?php

namespace Yaf\Route;

final class Simple implements \Yaf\Route_Interface
{
    /**
     * @var $controller
     */
    protected $controller;

    /**
     * @var $module
     */
    protected $module;

    /**
     * @var $action
     */
    protected $action;

    /**
     * @param $module_name
     * @param $controller_name
     * @param $action_name
     *
     * @return
     */
    public function __construct ( $module_name, $controller_name, $action_name )
    {
    }

    /**
     * @param $request
     *
     * @return
     */
    public function route ( $request )
    {
    }
}