<?php

namespace Afera\View;

class Twig implements \Yaf\View_Interface
{
    protected $_tpl_vars;

    protected $_tpl_dir;

    public function __get($name)
    {
        return $this->_tpl_vars[$name];
    }

    public function __set($name, $value)
    {
        $this->assign($name, $value);
    }

    /**
     * @param $name
     * @param $value
     *
     * @return void
     */
    public function assign ( $name = null, $value = null )
    {
        $this->_tpl_vars[$name] = $value;
    }

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return string
     */
    public function display ( $tpl = null, $tpl_vars = null )
    {
        return 'test';
    }

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return string
     */
    public function render ( $tpl = null, $tpl_vars = null )
    {
        return 'test';
    }

    /**
     * @param string $template_dir
     *
     * @return void
     */
    public function setScriptPath ( $template_dir = null )
    {
        $test = '';
    }

    /**
     * @return string
     */
    public function getScriptPath ()
    {
        $test = '';
    }

    function __construct ()
    {
        die(__METHOD__);
    }

    function __destruct ()
    {
        die(__METHOD__);
    }

}