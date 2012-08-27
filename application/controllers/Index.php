<?php

class IndexController extends \Yaf\Controller_Abstract
{
    protected $_mapper;

    public function init()
    {
        $this->_mapper = \Yaf\Registry::get(\Bootstrap::DB_REGISTRY_KEY);
    }

    public function indexAction()
    {
        $users = $this->_mapper->users->fetchAll();
        $this->_view->users = $users;
        $this->_view->hello = 'Hallo World from ' . __METHOD__;
    }
}