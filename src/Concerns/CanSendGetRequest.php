<?php

namespace IgorLealAntunes\SportmonksFootballApi\Concerns;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

trait CanSendGetRequest
{
    public function get(Client $client, string $url, array $query = []): ResponseInterface
    {
        return $client->get(
            $url,
            [
                'query' => [
                    'api_token' => $this->apiToken,
                    'timezone' => $this->timezone,
                    ...$query,
                ],
            ]
        );
    }
}
