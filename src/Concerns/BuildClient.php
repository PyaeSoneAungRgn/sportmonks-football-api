<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

trait BuildClient
{
    public function buildClient(): PendingRequest
    {
        return Http::baseUrl($this->baseUrl)
            ->withHeaders([
                'Accept' => 'application/json',
            ]);
    }
}
