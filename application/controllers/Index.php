<?php

class IndexController extends \Yaf\Controller_Abstract
{
    public function indexAction()
    {
        $this->_view->hello = 'Hallo World from ' . __METHOD__;
    }
}