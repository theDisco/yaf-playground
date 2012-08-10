<?php

namespace Yaf;

final class Application
{
    /**
     * @var $config
     */
    protected $config;

    /**
     * @var $dispatcher
     */
    protected $dispatcher;

    /**
     * @static
     *
     * @var $_app
     */
    protected static $_app;

    /**
     * @var $_modules
     */
    protected $_modules;

    /**
     * @var $_running
     */
    protected $_running;

    /**
     * @var $_environ
     */
    protected $_environ;

    /**
     * @var $_err_no
     */
    protected $_err_no;

    /**
     * @var $_err_msg
     */
    protected $_err_msg;

    /**
     * @param $config
     * @param $envrion
     */
    public function __construct ( $config, $envrion = null )
    {
    }

    /**
     * @return void
     */
    public function run ()
    {
    }

    /**
     * @param $entry
     *
     * @return void
     */
    public function execute ( $entry )
    {
    }

    /**
     * @static
     *
     * @return \Yaf\Application
     */
    public static function app ()
    {
    }

    /**
     * @return void
     */
    public function environ ()
    {
    }

    /**
     * @param $bootstrap
     *
     * @return void
     */
    public function bootstrap ( $bootstrap )
    {
    }

    /**
     * @return \Yaf\Config\Ini
     */
    public function getConfig ()
    {
    }

    /**
     * @return void
     */
    public function getModules ()
    {
    }

    /**
     * @return \Yaf\Dispatcher
     */
    public function getDispatcher ()
    {
    }

    /**
     * @param $directory
     *
     * @return
     */
    public function setAppDirectory ( $directory )
    {
    }

    /**
     * @return
     */
    public function getAppDirectory ()
    {
    }

    /**
     * @return
     */
    public function getLastErrorNo ()
    {
    }

    /**
     * @return
     */
    public function getLastErrorMsg ()
    {
    }

    /**
     * @return
     */
    public function clearLastError ()
    {
    }

    /**
     * @return
     */
    public function __destruct ()
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
}