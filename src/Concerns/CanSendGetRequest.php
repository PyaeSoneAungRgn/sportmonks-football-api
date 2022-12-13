<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

trait CanSendGetRequest
{
    public function get(Client $client, string $url, array $query = []): Response
    {
        $newQuery = [
            'api_token' => $this->apiToken,
            'timezone' => $this->timezone,
            ...$this->query,
            ...$query,
        ];
        $this->query = []; // reset include, filter, select and page

        return $client->get($url, ['query' => $newQuery]);
    }
}
