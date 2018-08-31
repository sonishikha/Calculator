<?php

namespace CustomeException;

class InvalidOperandException extends \Exception
{
    /**
    * Call constructor of parent class Exception
    */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
