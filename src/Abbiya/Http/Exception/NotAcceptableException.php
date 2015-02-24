<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;

class NotAcceptableException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Not Acceptable', Exception $previous = null, $code = 0)
    {
        parent::__construct(406, $message, $previous, [], $code);
    }
}
