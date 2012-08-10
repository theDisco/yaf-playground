<?php

class ErrorController extends \Yaf\Controller_Abstract
{
    public function errorAction()
    {
//        echo YAF_VERSION;
//        echo YAF_ENVIRON;
//        echo YAF_ERR_STARTUP_FAILED;
//        echo YAF_ERR_ROUTE_FAILED;
//        echo YAF_ERR_DISPATCH_FAILED;
//        echo YAF_ERR_AUTOLOAD_FAILED;
//        echo YAF_ERR_NOTFOUND_MODULE;
//        echo YAF_ERR_NOTFOUND_CONTROLLER;
//        echo YAF_ERR_NOTFOUND_ACTION;
//        echo YAF_ERR_NOTFOUND_VIEW;
//        echo YAF_ERR_CALL_FAILED;
//        echo YAF_ERR_TYPE_ERROR;

        $this->_view->exception = $this->_request->getException();
    }
}