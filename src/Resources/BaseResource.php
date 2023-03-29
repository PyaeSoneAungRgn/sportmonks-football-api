<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

use IgorLealAntunes\SportmonksFootballApi\Concerns\CanSetFilter;
use IgorLealAntunes\SportmonksFootballApi\Concerns\CanSetInclude;
use IgorLealAntunes\SportmonksFootballApi\Concerns\CanSetPage;
use IgorLealAntunes\SportmonksFootballApi\Concerns\CanSetSelect;
use IgorLealAntunes\SportmonksFootballApi\SportmonksFootballApi;

class BaseResource
{
    use CanSetSelect, CanSetInclude, CanSetFilter, CanSetPage;

    protected $query = [];

    public function __construct(
        protected readonly SportmonksFootballApi $service,
    ) {
    }

    protected function get(string $url): \stdClass
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: $url,
            query: $this->query
        );

        return json_decode($response->getBody()->getContents(), false);
    }
}
