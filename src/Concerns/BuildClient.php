<?php

namespace IgorLealAntunes\SportmonksFootballApi\Concerns;

use GuzzleHttp\Client;

trait BuildClient
{
    public function buildClient(): Client
    {
        return new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
    }
}
