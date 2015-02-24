<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;

class TooManyRequestsException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Too Many Requests', Exception $previous = null, $code = 0)
    {
        parent::__construct(429, $message, $previous, [], $code);
    }
}
