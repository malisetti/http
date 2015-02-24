<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

class ForbiddenException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Forbidden', Exception $previous = null, $code = 0)
    {
        parent::__construct(Response::HTTP_FORBIDDEN, $message, $previous, [], $code);
    }
}
