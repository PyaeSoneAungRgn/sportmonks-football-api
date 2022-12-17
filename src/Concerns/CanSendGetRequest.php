<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

trait CanSendGetRequest
{
    public function get(Client $client, string $url, array $query = []): Response
    {
        return $client->get(
            $url,
            [
                'query' => [
                    'api_token' => $this->apiToken,
                    'timezone' => $this->timezone,
                    ...$query,
                ]
            ]
        );
    }
}
