<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;

class GoneException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Gone', Exception $previous = null, $code = 0)
    {
        parent::__construct(410, $message, $previous, [], $code);
    }
}
