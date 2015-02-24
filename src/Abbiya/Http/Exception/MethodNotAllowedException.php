<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;
use Symfony\Component\HttpFoundation\Response;

class MethodNotAllowedException extends HttpException
{
    /**
     * Constructor
     *
     * @param array      $allowed
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct(array $allowed = [], $message = 'Method Not Allowed', Exception $previous = null, $code = 0)
    {
        $headers = [
            'Allow' => implode(', ', $allowed)
        ];

        parent::__construct(Response::HTTP_METHOD_NOT_ALLOWED, $message, $previous, $headers, $code);
    }
}
