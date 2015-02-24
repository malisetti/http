<?php

namespace Abbiya\Http\Exception;

use Exception;
use Abbiya\Http\Exception as HttpException;

class UnprocessableEntityException extends HttpException
{
    /**
     * Constructor
     *
     * @param string     $message
     * @param \Exception $previous
     * @param integer    $code
     */
    public function __construct($message = 'Unprocessable Entity', Exception $previous = null, $code = 0)
    {
        parent::__construct(422, $message, $previous, [], $code);
    }
}
