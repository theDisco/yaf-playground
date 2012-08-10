<?php

// TODO: Document

namespace Afera\View;

class Twig implements \Yaf\View_Interface
{
    /**
     * @var \Twig_Environment
     */
    protected $_twig;

    /**
     * @var array
     */
    protected $_vars = array();

    /**
     * @var string
     */
    protected $_path;

    /**
     * TODO: Add some better exception handling and verbosity for the user
     *
     * @return \Afera\View\Twig
     */
    public function __construct()
    {
        $defaults = array(
            'path' => APPLICATION_PATH . '/views',
            'options' => array(
                  'charset' => 'UTF-8',
                  'debug' => 'true'
            )
        );
        $twig = \Yaf\Registry::get(\Bootstrap::CONFIG_REGISTRY_KEY)->twig;
        $options = $twig->options->toArray() + $defaults['options'];

        $loader = new \Twig_Loader_Filesystem($twig->path);
        $this->_twig = new \Twig_Environment($loader, $options);
        $this->_twig->addGlobal('app', \Yaf\Application::app());

        $this->_setLayout();

        if ($twig->options->debug) {
            $this->_twig->addExtension(new \Twig_Extension_Debug());
        }
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->_vars[$name];
    }

    /**
     * @param $name
     * @param $value
     *
     * @return void
     */
    public function __set($name, $value)
    {
        $this->assign($name, $value);
    }

    /**
     * @param $key
     * @return boolean
     */
    public function __isset($key)
    {
        return ($this->_vars[$key] !== null);
    }

    /**
     * @param $key
     *
     * @return void
     */
    public function __unset($key)
    {
        unset($this->_vars[$key]);
    }

    /**
     * @param $name
     * @param $value
     *
     * @return void
     */
    public function assign ( $name = null, $value = null )
    {
        $this->_vars[$name] = $value;
    }

    /**
     * @param $name
     * @param $value
     *
     * @return string
     */
    public function display ( $name = null, $value = null )
    {
        echo $this->_twig->render($name, $this->_vars);
    }

    /**
     * @param $name
     * @param $value
     *
     * @return string
     */
    public function render ( $name = null, $value = null )
    {
        return $this->_twig->render($name, $this->_vars);
    }

    /**
     * @param string $path
     *
     * @return void
     */
    public function setScriptPath ( $path = null )
    {
        $this->_twig->getLoader()->addPath($path);
        $this->_path = $path;
    }

    /**
     * @return string
     */
    public function getScriptPath ()
    {
        return $this->_path;
    }

    /**
     * @return void
     */
    private function _setLayout()
    {
        $twig = \Yaf\Registry::get(\Bootstrap::CONFIG_REGISTRY_KEY)->twig;

        if ($twig->layout_path !== null && $twig->layout !== null) {
            $this->_twig->getLoader()->addPath($twig->layout_path);
            $this->_twig->addGlobal('layout', $this->_twig->loadTemplate($twig->layout));
        }
    }

}