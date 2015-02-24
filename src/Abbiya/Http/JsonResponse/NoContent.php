<?php

namespace Abbiya\Http\JsonResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

class NoContent extends JsonResponse
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $headers = [])
    {
        parent::__construct(null, JsonResponse::HTTP_NO_CONTENT, $headers);
    }
}
