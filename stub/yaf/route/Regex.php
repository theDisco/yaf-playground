<?php

namespace Yaf\Route;

final class Regex implements \Yaf\Route_Interface
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
     * @var $_maps
     */
    protected $_maps;

    /**
     * @var $_verify
     */
    protected $_verify;

    /**
     * @param $match
     * @param $route
     * @param $map
     * @param $verify
     *
     * @return
     */
    public function __construct ( $match, $route, $map, $verify )
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