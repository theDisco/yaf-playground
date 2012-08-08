<?php

namespace Yaf\Route;

final class Supervar implements \Yaf\Route_Interface
{
    /**
     * @var $_var_name
     */
    protected $_var_name;

    /**
     * @param $supervar_name
     *
     * @return
     */
    public function __construct ( $supervar_name )
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