<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;

class BadRequestException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Bad Request', Exception $previous = null, $code = 0)
    {
        parent::__construct(400, $message, $previous, [], $code);
    }
}
