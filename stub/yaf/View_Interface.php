<?php

namespace Yaf;

interface View_Interface
{
    /**
     * @param mixed $name
     * @param mixed $value
     *
     * @return void
     */
    public function assign ( $name = null, $value = null );

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return
     */
    public function display ( $tpl = null, $tpl_vars = null );

    /**
     * @param $tpl
     * @param $tpl_vars
     *
     * @return
     */
    public function render ( $tpl = null, $tpl_vars = null );

    /**
     * @param string $template_dir
     *
     * @return void
     */
    public function setScriptPath ( $template_dir = null );

    /**
     * @return string
     */
    public function getScriptPath ();
}