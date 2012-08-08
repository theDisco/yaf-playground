<?php

namespace Yaf;

final class Loader
{
    /**
     * @var $_local_ns
     */
    protected $_local_ns;

    /**
     * @var $_library
     */
    protected $_library;

    /**
     * @var $_global_library
     */
    protected $_global_library;

    /**@static
     *
     * @var $_instance
     */
    protected static $_instance;

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
     * @param $class_name
     *
     * @return
     */
    public function autoload ( $class_name )
    {
    }

    /**
     * @static
     *
     * @param $local_library_path
     * @param $global_library_path
     *
     * @return
     */
    public static function getInstance ( $local_library_path, $global_library_path )
    {
    }

    /**
     * @param $name_prefix
     *
     * @return
     */
    public function registerLocalNamespace ( $name_prefix )
    {
    }

    /**
     * @return
     */
    public function getLocalNamespace ()
    {
    }

    /**
     * @return
     */
    public function clearLocalNamespace ()
    {
    }

    /**
     * @param $class_name
     *
     * @return
     */
    public function isLocalName ( $class_name )
    {
    }

    /**
     * @static
     *
     * @param $file
     *
     * @return
     */
    public static function import ( $file )
    {
    }

    /**
     * @param $library_path
     * @param $is_global
     *
     * @return
     */
    public function setLibraryPath ( $library_path, $is_global )
    {
    }

    /**
     * @param $is_global
     *
     * @return
     */
    public function getLibraryPath ( $is_global )
    {
    }
}