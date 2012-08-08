<?php

namespace Yaf\Route;

final class Map implements \Yaf\Route_Interface
{
    /**
     * @var $_ctl_router
     */
    protected $_ctl_router;

    /**
     * @var $_delimeter
     */
    protected $_delimeter;

    /**
     * @param $controller_prefer
     * @param $delimiter
     *
     * @return
     */
    public function __construct ( $controller_prefer, $delimiter )
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