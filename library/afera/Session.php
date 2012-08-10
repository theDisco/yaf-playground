<?php

namespace Afera;

class Session
{
    public static function setSaveHandler(\Afera\Session\SaveHandlerInterface $handler)
    {
        session_set_save_handler(
            array($handler, 'open'),
            array($handler, 'close'),
            array($handler, 'read'),
            array($handler, 'write'),
            array($handler, 'destroy'),
            array($handler, 'gc')
        );
    }
}
