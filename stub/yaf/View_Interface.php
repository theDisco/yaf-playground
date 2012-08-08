<?php

namespace Yaf;

interface View_Interface
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