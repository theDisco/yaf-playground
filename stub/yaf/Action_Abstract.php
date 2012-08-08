<?php

namespace Yaf;

abstract class Action_Abstract extends \Yaf\Controller_Abstract
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