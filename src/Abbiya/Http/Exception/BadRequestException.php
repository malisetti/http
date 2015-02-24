<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

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
        parent::__construct(Response::HTTP_BAD_REQUEST, $message, $previous, [], $code);
    }
}
