<?php

namespace Yaf;

final class Registry
{
    /**@static
     *
     * @var $_instance
     */
    protected static $_instance;

    /**
     * @var $_entries
     */
    protected $_entries;

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
     * @static
     *
     * @param $name
     *
     * @return
     */
    public static function get ( $name )
    {
    }

    /**
     * @static
     *
     * @param $name
     *
     * @return
     */
    public static function has ( $name )
    {
    }

    /**
     * @static
     *
     * @param $name
     * @param $value
     *
     * @return
     */
    public static function set ( $name, $value )
    {
    }

    /**
     * @static
     *
     * @param $name
     *
     * @return
     */
    public static function del ( $name )
    {
    }
}