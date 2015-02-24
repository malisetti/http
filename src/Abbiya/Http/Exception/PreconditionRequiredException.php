<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;

class PreconditionRequiredException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Precondition Required', Exception $previous = null, $code = 0)
    {
        parent::__construct(428, $message, $previous, [], $code);
    }
}
