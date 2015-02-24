<?php

namespace Abbiya\Http\JsonResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

class PartialContent extends JsonResponse
{
    /**
     * {@inheritdoc}
     */
    public function __construct($data = null, array $headers = [])
    {
        parent::__construct($data, JsonResponse::HTTP_PARTIAL_CONTENT, $headers);
    }
}
