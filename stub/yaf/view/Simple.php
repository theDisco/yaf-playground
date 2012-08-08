<?php

namespace Yaf\View;

final class Simple implements \Yaf\View_Interface
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