<?php

namespace Yaf;

abstract class Plugin_Abstract
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