<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class NewsResource extends BaseResource
{
    public function preMatchNews(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/news/pre-match'
        );
    }

    public function preMatchNewsBySeasonId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/news/pre-match/seasons/{$id}"
        );
    }

    public function preMatchNewsForUpcomingFixtures(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/news/pre-match/upcoming'
        );
    }
}
