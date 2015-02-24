<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;

class UnsupportedMediaException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Unsupported Media', Exception $previous = null, $code = 0)
    {
        parent::__construct(415, $message, $previous, [], $code);
    }
}
