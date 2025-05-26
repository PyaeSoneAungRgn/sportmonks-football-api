<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

trait CanSendGetRequest
{
    public function get(PendingRequest $client, string $url, array $query = []): Response
    {
        return $client->get(
            $url,
            [
                'api_token' => $this->apiToken,
                'timezone' => $this->timezone,
                ...$query,
            ]
        );
    }
}
