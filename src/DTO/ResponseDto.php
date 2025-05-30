<?php

namespace PyaeSoneAung\SportmonksFootballApi\DTO;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class ResponseDto
{
    public function __construct(
        private Response $response
    ) {}

    public function response(): Response
    {
        return $this->response;
    }

    public function collect(?string $key = null): Collection
    {
        return $this->response->collect($key);
    }

    /**
     * @return object{
     *     resets_in_seconds: int|null,
     *     remaining: int|null,
     *     requested_entity: string|null,
     * }
     */
    public function rateLimit(): object
    {
        return (object) [
            'resets_in_seconds' => $this->response->json('rate_limit.resets_in_seconds'),
            'remaining' => $this->response->json('rate_limit.remaining'),
            'requested_entity' => $this->response->json('rate_limit.requested_entity'),
        ];
    }

    /**
     * @return object{
     *     count: int|null,
     *     per_page: int|null,
     *     current_page: int|null,
     *     next_page: string|null,
     *     has_more: bool|null,
     * }
     */
    public function pagination(): object
    {
        return (object) [
            'count' => $this->response->json('pagination.count'),
            'per_page' => $this->response->json('pagination.per_page'),
            'current_page' => $this->response->json('pagination.current_page'),
            'next_page' => $this->response->json('pagination.next_page'),
            'has_more' => $this->response->json('pagination.has_more'),
        ];
    }
}
