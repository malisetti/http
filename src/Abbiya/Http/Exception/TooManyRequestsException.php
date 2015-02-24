<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

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
        parent::__construct(Response::HTTP_TOO_MANY_REQUESTS, $message, $previous, [], $code);
    }
}
