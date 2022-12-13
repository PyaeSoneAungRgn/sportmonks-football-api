<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use GuzzleHttp\Psr7\Response;
use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

class BaseResource
{
    public function __construct(
        protected readonly SportmonksFootballApi $service,
    ) {
    }

    protected function sanitizeResponse(Response $response): array
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    protected function toString(int|string|array $val): string
    {
        if (is_array($val)) {
            return implode(',', $val);
        }

        return strval($val);
    }
}
