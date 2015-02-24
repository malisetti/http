<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

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
        parent::__construct(Response::HTTP_NOT_ACCEPTABLE, $message, $previous, [], $code);
    }
}
