<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

class NotFoundException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Not Found', Exception $previous = null, $code = 0)
    {
        parent::__construct(Response::HTTP_NOT_FOUND, $message, $previous, [], $code);
    }
}
