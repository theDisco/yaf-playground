<?php

namespace Yaf;

abstract class Response_Abstract
{
    /**
     * @var $_header
     */
    protected $_header;

    /**
     * @var $_body
     */
    protected $_body;

    /**
     * @var $_sendheader
     */
    protected $_sendheader;

    /**
     * @return
     */
    public function __construct ()
    {
    }

    /**
     * @return
     */
    public function __destruct ()
    {
    }

    /**
     * @return
     */
    public function __clone ()
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }

    /**
     * @return
     */
    public function setBody ()
    {
    }

    /**
     * @return
     */
    public function appendBody ()
    {
    }

    /**
     * @return
     */
    public function prependBody ()
    {
    }

    /**
     * @return
     */
    public function clearBody ()
    {
    }

    /**
     * @return
     */
    public function getBody ()
    {
    }

    /**
     * @return
     */
    public function setHeader ()
    {
    }

    /**
     * @return
     */
    protected function setAllHeaders ()
    {
    }

    /**
     * @return
     */
    public function getHeader ()
    {
    }

    /**
     * @return
     */
    public function clearHeaders ()
    {
    }

    /**
     * @return
     */
    public function setRedirect ()
    {
    }

    /**
     * @return
     */
    public function response ()
    {
    }
}