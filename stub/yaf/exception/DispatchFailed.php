<?php

namespace Yaf\Exception;

class DispatchFailed extends \Yaf\Exception
{
    /**
     * @var $message
     */
    protected $message;

    /**
     * @var $code
     */
    protected $code;

    /**
     * @var $file
     */
    protected $file;

    /**
     * @var $line
     */
    protected $line;

    /**
     * @var $previous
     */
    protected $previous;

    /**
     * @param $message
     * @param $code
     * @param $previous
     *
     * @return
     */
    public function __construct ( $message, $code, $previous )
    {
    }

    /**
     * @return
     */
    public function __toString ()
    {
    }
}