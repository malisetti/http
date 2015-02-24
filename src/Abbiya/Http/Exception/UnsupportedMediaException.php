<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

class UnsupportedMediaException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Unsupported Media', Exception $previous = null, $code = 0)
    {
        parent::__construct(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, $message, $previous, [], $code);
    }
}
