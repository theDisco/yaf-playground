<?php

namespace Yaf;

final class Session implements \Iterator, \Traversable, \ArrayAccess, \Countable
{
    /**
     * @static
     *
     * @var $_instance
     */
    protected static $_instance;

    /**
     * @var $_session
     */
    protected $_session;

    /**
     * @var $_started
     */
    protected $_started;

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
     * @static
     * @return
     */
    public static function getInstance ()
    {
    }

    /**
     * @return
     */
    public function start ()
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function get ( $name )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function has ( $name )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function set ( $name, $value )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function del ( $name )
    {
    }

    /**
     * @return
     */
    public function count ()
    {
    }

    /**
     * @return
     */
    public function rewind ()
    {
    }

    /**
     * @return
     */
    public function next ()
    {
    }

    /**
     * @return
     */
    public function current ()
    {
    }

    /**
     * @return
     */
    public function key ()
    {
    }

    /**
     * @return
     */
    public function valid ()
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function offsetGet ( $name )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function offsetSet ( $name, $value )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function offsetExists ( $name )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function offsetUnset ( $name )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function __get ( $name )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function __isset ( $name )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function __set ( $name, $value )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function __unset ( $name )
    {
    }
}