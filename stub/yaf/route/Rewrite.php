<?php

namespace Yaf\Route;

final class Rewrite implements \Yaf\Route_Interface
{
    /**
     * @var $_route
     */
    protected $_route;

    /**
     * @var $_default
     */
    protected $_default;

    /**
     * @var $_verify
     */
    protected $_verify;

    /**
     * @param $match
     * @param $route
     * @param $verify
     *
     * @return
     */
    public function __construct ( $match, $route, $verify = array() )
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