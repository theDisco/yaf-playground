<?php
/**
 *
 */
define( 'YAF_VERSION', '2.1.11' );

/**
 *
 */
define( 'YAF_ENVIRON', 'product' );

/**
 *
 */
define( 'YAF_ERR_STARTUP_FAILED', 512 );

/**
 *
 */
define( 'YAF_ERR_ROUTE_FAILED', 513 );

/**
 *
 */
define( 'YAF_ERR_DISPATCH_FAILED', 514 );

/**
 *
 */
define( 'YAF_ERR_AUTOLOAD_FAILED', 520 );

/**
 *
 */
define( 'YAF_ERR_NOTFOUND_MODULE', 515 );

/**
 *
 */
define( 'YAF_ERR_NOTFOUND_CONTROLLER', 516 );

/**
 *
 */
define( 'YAF_ERR_NOTFOUND_ACTION', 517 );

/**
 *
 */
define( 'YAF_ERR_NOTFOUND_VIEW', 518 );

/**
 *
 */
define( 'YAF_ERR_CALL_FAILED', 519 );

/**
 *
 */
define( 'YAF_ERR_TYPE_ERROR', 521 );

final class Yaf_Application
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
    public function __construct ( $config, $envrion )
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
     * @return void
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
     * @return void
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
     * @return void
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

abstract class Yaf_Bootstrap_Abstract
{
}

final class Yaf_Dispatcher
{
    /**
     * @var $_router
     */
    protected $_router;

    /**
     * @var $_view
     */
    protected $_view;

    /**
     * @var $_request
     */
    protected $_request;

    /**
     * @var $_plugins
     */
    protected $_plugins;

    /**
     * @static
     *
     * @var $_instance
     */
    protected static $_instance;

    /**
     * @var $_auto_render
     */
    protected $_auto_render;

    /**
     * @var $_return_response
     */
    protected $_return_response;

    /**
     * @var $_instantly_flush
     */
    protected $_instantly_flush;

    /**
     * @var $_default_module
     */
    protected $_default_module;

    /**
     * @var $_default_controller
     */
    protected $_default_controller;

    /**
     * @var $_default_action
     */
    protected $_default_action;

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
     * @return
     */
    public function enableView ()
    {
    }

    /**
     * @return
     */
    public function disableView ()
    {
    }

    /**
     * @param $templates_dir
     * @param $options
     *
     * @return
     */
    public function initView ( $templates_dir, $options )
    {
    }

    /**
     * @param $view
     *
     * @return
     */
    public function setView ( $view )
    {
    }

    /**
     * @param $request
     *
     * @return
     */
    public function setRequest ( $request )
    {
    }

    /**
     * @return
     */
    public function getApplication ()
    {
    }

    /**
     * @return
     */
    public function getRouter ()
    {
    }

    /**
     * @return
     */
    public function getRequest ()
    {
    }

    /**
     * @param $callback
     * @param $error_types
     *
     * @return
     */
    public function setErrorHandler ( $callback, $error_types )
    {
    }

    /**
     * @param $module
     *
     * @return
     */
    public function setDefaultModule ( $module )
    {
    }

    /**
     * @param $controller
     *
     * @return
     */
    public function setDefaultController ( $controller )
    {
    }

    /**
     * @param $action
     *
     * @return
     */
    public function setDefaultAction ( $action )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function returnResponse ( $flag )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function autoRender ( $flag )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function flushInstantly ( $flag )
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
     * @param $request
     *
     * @return
     */
    public function dispatch ( $request )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function throwException ( $flag )
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function catchException ( $flag )
    {
    }

    /**
     * @param $plugin
     *
     * @return
     */
    public function registerPlugin ( $plugin )
    {
    }
}

final class Yaf_Loader
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

abstract class Yaf_Request_Abstract
{
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';

    /**
     * @var $module
     */
    public $module;

    /**
     * @var $controller
     */
    public $controller;

    /**
     * @var $action
     */
    public $action;

    /**
     * @var $method
     */
    public $method;

    /**
     * @var $params
     */
    protected $params;

    /**
     * @var $language
     */
    protected $language;

    /**
     * @var $_exception
     */
    protected $_exception;

    /**
     * @var $_base_uri
     */
    protected $_base_uri;

    /**
     * @var $uri
     */
    protected $uri;

    /**
     * @var $dispatched
     */
    protected $dispatched;

    /**
     * @var $routed
     */
    protected $routed;

    /**
     * @return
     */
    public function isGet ()
    {
    }

    /**
     * @return
     */
    public function isPost ()
    {
    }

    /**
     * @return
     */
    public function isPut ()
    {
    }

    /**
     * @return
     */
    public function isHead ()
    {
    }

    /**
     * @return
     */
    public function isOptions ()
    {
    }

    /**
     * @return
     */
    public function isCli ()
    {
    }

    /**
     * @return
     */
    public function isXmlHttpRequest ()
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getServer ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getEnv ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function setParam ( $name, $value )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getParam ( $name, $default )
    {
    }

    /**
     * @return
     */
    public function getParams ()
    {
    }

    /**
     * @return
     */
    public function getException ()
    {
    }

    /**
     * @return
     */
    public function getModuleName ()
    {
    }

    /**
     * @return
     */
    public function getControllerName ()
    {
    }

    /**
     * @return
     */
    public function getActionName ()
    {
    }

    /**
     * @param $module
     *
     * @return
     */
    public function setModuleName ( $module )
    {
    }

    /**
     * @param $controller
     *
     * @return
     */
    public function setControllerName ( $controller )
    {
    }

    /**
     * @param $action
     *
     * @return
     */
    public function setActionName ( $action )
    {
    }

    /**
     * @return
     */
    public function getMethod ()
    {
    }

    /**
     * @return
     */
    public function getLanguage ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setBaseUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function getBaseUri ()
    {
    }

    /**
     * @return
     */
    public function getRequestUri ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setRequestUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function isDispatched ()
    {
    }

    /**
     * @return
     */
    public function setDispatched ()
    {
    }

    /**
     * @return
     */
    public function isRouted ()
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function setRouted ( $flag )
    {
    }
}

class Yaf_Request_Http extends Yaf_Request_Abstract
{
    /**
     * @var $module
     */
    public $module;

    /**
     * @var $controller
     */
    public $controller;

    /**
     * @var $action
     */
    public $action;

    /**
     * @var $method
     */
    public $method;

    /**
     * @var $params
     */
    protected $params;

    /**
     * @var $language
     */
    protected $language;

    /**
     * @var $_exception
     */
    protected $_exception;

    /**
     * @var $_base_uri
     */
    protected $_base_uri;

    /**
     * @var $uri
     */
    protected $uri;

    /**
     * @var $dispatched
     */
    protected $dispatched;

    /**
     * @var $routed
     */
    protected $routed;

    /**
     * @return
     */
    public function getQuery ()
    {
    }

    /**
     * @return
     */
    public function getRequest ()
    {
    }

    /**
     * @return
     */
    public function getPost ()
    {
    }

    /**
     * @return
     */
    public function getCookie ()
    {
    }

    /**
     * @return
     */
    public function getFiles ()
    {
    }

    /**
     * @return
     */
    public function get ()
    {
    }

    /**
     * @return
     */
    public function isXmlHttpRequest ()
    {
    }

    /**
     * @return
     */
    public function __construct ()
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
    public function isGet ()
    {
    }

    /**
     * @return
     */
    public function isPost ()
    {
    }

    /**
     * @return
     */
    public function isPut ()
    {
    }

    /**
     * @return
     */
    public function isHead ()
    {
    }

    /**
     * @return
     */
    public function isOptions ()
    {
    }

    /**
     * @return
     */
    public function isCli ()
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getServer ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getEnv ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function setParam ( $name, $value )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getParam ( $name, $default )
    {
    }

    /**
     * @return
     */
    public function getParams ()
    {
    }

    /**
     * @return
     */
    public function getException ()
    {
    }

    /**
     * @return
     */
    public function getModuleName ()
    {
    }

    /**
     * @return
     */
    public function getControllerName ()
    {
    }

    /**
     * @return
     */
    public function getActionName ()
    {
    }

    /**
     * @param $module
     *
     * @return
     */
    public function setModuleName ( $module )
    {
    }

    /**
     * @param $controller
     *
     * @return
     */
    public function setControllerName ( $controller )
    {
    }

    /**
     * @param $action
     *
     * @return
     */
    public function setActionName ( $action )
    {
    }

    /**
     * @return
     */
    public function getMethod ()
    {
    }

    /**
     * @return
     */
    public function getLanguage ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setBaseUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function getBaseUri ()
    {
    }

    /**
     * @return
     */
    public function getRequestUri ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setRequestUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function isDispatched ()
    {
    }

    /**
     * @return
     */
    public function setDispatched ()
    {
    }

    /**
     * @return
     */
    public function isRouted ()
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function setRouted ( $flag )
    {
    }
}

final class Yaf_Request_Simple extends Yaf_Request_Abstract
{
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';

    /**
     * @var $module
     */
    public $module;

    /**
     * @var $controller
     */
    public $controller;

    /**
     * @var $action
     */
    public $action;

    /**
     * @var $method
     */
    public $method;

    /**
     * @var $params
     */
    protected $params;

    /**
     * @var $language
     */
    protected $language;

    /**
     * @var $_exception
     */
    protected $_exception;

    /**
     * @var $_base_uri
     */
    protected $_base_uri;

    /**
     * @var $uri
     */
    protected $uri;

    /**
     * @var $dispatched
     */
    protected $dispatched;

    /**
     * @var $routed
     */
    protected $routed;

    /**
     * @return
     */
    public function __construct ()
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
    public function getQuery ()
    {
    }

    /**
     * @return
     */
    public function getRequest ()
    {
    }

    /**
     * @return
     */
    public function getPost ()
    {
    }

    /**
     * @return
     */
    public function getCookie ()
    {
    }

    /**
     * @return
     */
    public function getFiles ()
    {
    }

    /**
     * @return
     */
    public function get ()
    {
    }

    /**
     * @return
     */
    public function isXmlHttpRequest ()
    {
    }

    /**
     * @return
     */
    public function isGet ()
    {
    }

    /**
     * @return
     */
    public function isPost ()
    {
    }

    /**
     * @return
     */
    public function isPut ()
    {
    }

    /**
     * @return
     */
    public function isHead ()
    {
    }

    /**
     * @return
     */
    public function isOptions ()
    {
    }

    /**
     * @return
     */
    public function isCli ()
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getServer ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getEnv ( $name, $default )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function setParam ( $name, $value )
    {
    }

    /**
     * @param $name
     * @param $default
     *
     * @return
     */
    public function getParam ( $name, $default )
    {
    }

    /**
     * @return
     */
    public function getParams ()
    {
    }

    /**
     * @return
     */
    public function getException ()
    {
    }

    /**
     * @return
     */
    public function getModuleName ()
    {
    }

    /**
     * @return
     */
    public function getControllerName ()
    {
    }

    /**
     * @return
     */
    public function getActionName ()
    {
    }

    /**
     * @param $module
     *
     * @return
     */
    public function setModuleName ( $module )
    {
    }

    /**
     * @param $controller
     *
     * @return
     */
    public function setControllerName ( $controller )
    {
    }

    /**
     * @param $action
     *
     * @return
     */
    public function setActionName ( $action )
    {
    }

    /**
     * @return
     */
    public function getMethod ()
    {
    }

    /**
     * @return
     */
    public function getLanguage ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setBaseUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function getBaseUri ()
    {
    }

    /**
     * @return
     */
    public function getRequestUri ()
    {
    }

    /**
     * @param $uir
     *
     * @return
     */
    public function setRequestUri ( $uir )
    {
    }

    /**
     * @return
     */
    public function isDispatched ()
    {
    }

    /**
     * @return
     */
    public function setDispatched ()
    {
    }

    /**
     * @return
     */
    public function isRouted ()
    {
    }

    /**
     * @param $flag
     *
     * @return
     */
    public function setRouted ( $flag )
    {
    }
}

abstract class Yaf_Response_Abstract
{
    /**
     * @var $_header
     */
    protected $_header;

    /**
     * @var $_body
     */
    protected $_body;

    /**
     * @var $_sendheader
     */
    protected $_sendheader;

    /**
     * @return
     */
    public function __construct ()
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
    public function __toString ()
    {
    }

    /**
     * @return
     */
    public function setBody ()
    {
    }

    /**
     * @return
     */
    public function appendBody ()
    {
    }

    /**
     * @return
     */
    public function prependBody ()
    {
    }

    /**
     * @return
     */
    public function clearBody ()
    {
    }

    /**
     * @return
     */
    public function getBody ()
    {
    }

    /**
     * @return
     */
    public function setHeader ()
    {
    }

    /**
     * @return
     */
    protected function setAllHeaders ()
    {
    }

    /**
     * @return
     */
    public function getHeader ()
    {
    }

    /**
     * @return
     */
    public function clearHeaders ()
    {
    }

    /**
     * @return
     */
    public function setRedirect ()
    {
    }

    /**
     * @return
     */
    public function response ()
    {
    }
}

class Yaf_Response_Http extends Yaf_Response_Abstract
{
    /**
     * @var $_header
     */
    protected $_header;

    /**
     * @var $_body
     */
    protected $_body;

    /**
     * @var $_sendheader
     */
    protected $_sendheader;

    /**
     * @var $_response_code
     */
    protected $_response_code;

    /**
     * @return
     */
    public function __construct ()
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
    public function __toString ()
    {
    }

    /**
     * @return
     */
    public function setBody ()
    {
    }

    /**
     * @return
     */
    public function appendBody ()
    {
    }

    /**
     * @return
     */
    public function prependBody ()
    {
    }

    /**
     * @return
     */
    public function clearBody ()
    {
    }

    /**
     * @return
     */
    public function getBody ()
    {
    }

    /**
     * @return
     */
    public function setHeader ()
    {
    }

    /**
     * @return
     */
    protected function setAllHeaders ()
    {
    }

    /**
     * @return
     */
    public function getHeader ()
    {
    }

    /**
     * @return
     */
    public function clearHeaders ()
    {
    }

    /**
     * @return
     */
    public function setRedirect ()
    {
    }

    /**
     * @return
     */
    public function response ()
    {
    }
}

class Yaf_Response_Cli extends Yaf_Response_Abstract
{
    /**
     * @var $_header
     */
    protected $_header;

    /**
     * @var $_body
     */
    protected $_body;

    /**
     * @var $_sendheader
     */
    protected $_sendheader;

    /**
     * @return
     */
    public function __construct ()
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
    public function __toString ()
    {
    }

    /**
     * @return
     */
    public function setBody ()
    {
    }

    /**
     * @return
     */
    public function appendBody ()
    {
    }

    /**
     * @return
     */
    public function prependBody ()
    {
    }

    /**
     * @return
     */
    public function clearBody ()
    {
    }

    /**
     * @return
     */
    public function getBody ()
    {
    }

    /**
     * @return
     */
    public function setHeader ()
    {
    }

    /**
     * @return
     */
    protected function setAllHeaders ()
    {
    }

    /**
     * @return
     */
    public function getHeader ()
    {
    }

    /**
     * @return
     */
    public function clearHeaders ()
    {
    }

    /**
     * @return
     */
    public function setRedirect ()
    {
    }

    /**
     * @return
     */
    public function response ()
    {
    }
}

abstract class Yaf_Controller_Abstract
{
    /**
     * @var $actions
     */
    public $actions;

    /**
     * @var $_module
     */
    protected $_module;

    /**
     * @var $_name
     */
    protected $_name;

    /**
     * @var $_request
     */
    protected $_request;

    /**
     * @var $_response
     */
    protected $_response;

    /**
     * @var $_invoke_args
     */
    protected $_invoke_args;

    /**
     * @var $_view
     */
    protected $_view;

    /**
     * @final
     *
     * @param $tpl
     * @param $parameters
     *
     * @return
     */
    protected final function render ( $tpl, $parameters )
    {
    }

    /**
     * @final
     *
     * @param $tpl
     * @param $parameters
     *
     * @return
     */
    protected final function display ( $tpl, $parameters )
    {
    }

    /**
     * @final
     * @return
     */
    public final function getRequest ()
    {
    }

    /**
     * @final
     * @return
     */
    public final function getResponse ()
    {
    }

    /**
     * @final
     * @return
     */
    public final function getModuleName ()
    {
    }

    /**
     * @final
     * @return
     */
    public final function getView ()
    {
    }

    /**
     * @final
     *
     * @param $options
     *
     * @return
     */
    public final function initView ( $options )
    {
    }

    /**
     * @final
     *
     * @param $view_directory
     *
     * @return
     */
    public final function setViewpath ( $view_directory )
    {
    }

    /**
     * @final
     * @return
     */
    public final function getViewpath ()
    {
    }

    /**
     * @final
     *
     * @param $module
     * @param $controller
     * @param $action
     * @param $paramters
     *
     * @return
     */
    public final function forward ( $module, $controller, $action, $paramters )
    {
    }

    /**
     * @final
     *
     * @param $url
     *
     * @return
     */
    public final function redirect ( $url )
    {
    }

    /**
     * @final
     * @return
     */
    public final function getInvokeArgs ()
    {
    }

    /**
     * @final
     *
     * @param $name
     *
     * @return
     */
    public final function getInvokeArg ( $name )
    {
    }

    /**
     * @final
     * @return
     */
    public final function __construct ()
    {
    }

    /**
     * @final
     * @return
     */
    public final function __clone ()
    {
    }
}

abstract class Yaf_Action_Abstract extends Yaf_Controller_Abstract
{
    /**
     * @var $actions
     */
    public $actions;

    /**
     * @var $_module
     */
    protected $_module;

    /**
     * @var $_name
     */
    protected $_name;

    /**
     * @var $_request
     */
    protected $_request;

    /**
     * @var $_response
     */
    protected $_response;

    /**
     * @var $_invoke_args
     */
    protected $_invoke_args;

    /**
     * @var $_view
     */
    protected $_view;

    /**
     * @var $_controller
     */
    protected $_controller;

    /**
     * @return
     */
    public function execute ()
    {
    }

    /**
     * @return
     */
    public function getController ()
    {
    }
}

abstract class Yaf_Config_Abstract
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
     * @return
     */
    public function get ()
    {
    }

    /**
     * @return
     */
    public function set ()
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
}

final class Yaf_Config_Ini extends Yaf_Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable
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
    public function toArray ()
    {
    }

    /**
     * @return
     */
    public function readonly ()
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
     * @param $value
     *
     * @return
     */
    public function __set ( $name, $value )
    {
    }
}

final class Yaf_Config_Simple extends Yaf_Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable
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

interface Yaf_View_Interface
{
    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function assign ( $name, $value );

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return
     */
    public function display ( $tpl, $tpl_vars );

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return
     */
    public function render ( $tpl, $tpl_vars );

    /**
     * @param $template_dir
     *
     * @return
     */
    public function setScriptPath ( $template_dir );

    /**
     * @return
     */
    public function getScriptPath ();
}

final class Yaf_View_Simple implements Yaf_View_Interface
{
    /**
     * @var $_tpl_vars
     */
    protected $_tpl_vars;

    /**
     * @var $_tpl_dir
     */
    protected $_tpl_dir;

    /**
     * @param $tempalte_dir
     * @param $options
     *
     * @return
     */
    public function __construct ( $tempalte_dir, $options )
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
    public function assign ( $name, $value )
    {
    }

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return
     */
    public function render ( $tpl, $tpl_vars )
    {
    }

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return
     */
    public function display ( $tpl, $tpl_vars )
    {
    }

    /**
     * @param $name
     * @param $value
     *
     * @return
     */
    public function assignRef ( $name, $value )
    {
    }

    /**
     * @param $name
     *
     * @return
     */
    public function clear ( $name )
    {
    }

    /**
     * @param $template_dir
     *
     * @return
     */
    public function setScriptPath ( $template_dir )
    {
    }

    /**
     * @return
     */
    public function getScriptPath ()
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
     * @param $value
     *
     * @return
     */
    public function __set ( $name, $value )
    {
    }
}

final class Yaf_Router
{
    /**
     * @var $_routes
     */
    protected $_routes;

    /**
     * @var $_current
     */
    protected $_current;

    /**
     * @return
     */
    public function __construct ()
    {
    }

    /**
     * @return
     */
    public function addRoute ()
    {
    }

    /**
     * @return
     */
    public function addConfig ()
    {
    }

    /**
     * @return
     */
    public function route ()
    {
    }

    /**
     * @return
     */
    public function getRoute ()
    {
    }

    /**
     * @return
     */
    public function getRoutes ()
    {
    }

    /**
     * @return
     */
    public function getCurrentRoute ()
    {
    }
}

interface Yaf_Route_Interface
{
    /**
     * @param $request
     *
     * @return
     */
    public function route ( $request );
}

class Yaf_Route_Static implements Yaf_Route_Interface
{
    /**
     * @param $uri
     *
     * @return
     */
    public function match ( $uri )
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

    /**
     * @return
     */
    public function __construct ()
    {
    }

    /**
     * @return
     */
    public function addRoute ()
    {
    }

    /**
     * @return
     */
    public function addConfig ()
    {
    }

    /**
     * @return
     */
    public function getRoute ()
    {
    }

    /**
     * @return
     */
    public function getRoutes ()
    {
    }

    /**
     * @return
     */
    public function getCurrentRoute ()
    {
    }
}

final class Yaf_Route_Simple implements Yaf_Route_Interface
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

final class Yaf_Route_Supervar implements Yaf_Route_Interface
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

final class Yaf_Route_Rewrite implements Yaf_Route_Interface
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
    public function __construct ( $match, $route, $verify )
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

final class Yaf_Route_Regex implements Yaf_Route_Interface
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

final class Yaf_Route_Map implements Yaf_Route_Interface
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

abstract class Yaf_Plugin_Abstract
{
    /**
     * @param $request
     * @param $response
     *
     * @return
     */
    public function routerStartup ( $request, $response )
    {
    }

    /**
     * @param $request
     * @param $response
     *
     * @return
     */
    public function routerShutdown ( $request, $response )
    {
    }

    /**
     * @param $request
     * @param $response
     *
     * @return
     */
    public function dispatchLoopStartup ( $request, $response )
    {
    }

    /**
     * @param $request
     * @param $response
     *
     * @return
     */
    public function dispatchLoopShutdown ( $request, $response )
    {
    }

    /**
     * @param $request
     * @param $response
     *
     * @return
     */
    public function preDispatch ( $request, $response )
    {
    }

    /**
     * @param $request
     * @param $response
     *
     * @return
     */
    public function postDispatch ( $request, $response )
    {
    }

    /**
     * @param $request
     * @param $response
     *
     * @return
     */
    public function preResponse ( $request, $response )
    {
    }
}

final class Yaf_Registry
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

final class Yaf_Session implements Iterator, Traversable, ArrayAccess, Countable
{
    /**@static
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

class Yaf_Exception extends Exception
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_StartupError extends Yaf_Exception
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_RouterFailed extends Yaf_Exception
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_DispatchFailed extends Yaf_Exception
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_LoadFailed extends Yaf_Exception
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_LoadFailed_Module extends Yaf_Exception_LoadFailed
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_LoadFailed_Controller extends Yaf_Exception_LoadFailed
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_LoadFailed_Action extends Yaf_Exception_LoadFailed
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_LoadFailed_View extends Yaf_Exception_LoadFailed
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

class Yaf_Exception_TypeError extends Yaf_Exception
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}

