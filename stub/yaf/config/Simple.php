<?php

namespace Yaf\Config;

final class Simple extends \Yaf\Config_Abstract implements \Iterator, \Traversable, \ArrayAccess, \Countable
{
    /**
     * @var $_config
     */
    protected $_config;

    /**
     * @var $_readonly
     */
    protected $_readonly;

    /**
     * @param $config_file
     * @param $section
     *
     * @return
     */
    public function __construct ( $config_file, $section )
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
     *
     * @return
     */
    public function get ( $name )
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
     * @return
     */
    public function count ()
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
     * @return
     */
    public function rewind ()
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
    public function next ()
    {
    }

    /**
     * @return
     */
    public function valid ()
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
    public function readonly ()
    {
    }

    /**
     * @return
     */
    public function toArray ()
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
    public function __get ( $name )
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
     *
     * @return
     */
    public function offsetExists ( $name )
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
}