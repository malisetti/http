<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

class ImATeapotException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'I\'m a teapot', Exception $previous = null, $code = 0)
    {
        parent::__construct(Response::HTTP_I_AM_A_TEAPOT, $message, $previous, [], $code);
    }
}
