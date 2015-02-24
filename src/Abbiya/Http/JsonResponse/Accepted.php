<?php

namespace Abbiya\Http\JsonResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

class Accepted extends JsonResponse
{
    /**
     * {@inheritdoc}
     */
    public function __construct($data = null, array $headers = [])
    {
        parent::__construct($data, 202, $headers);
    }
}
