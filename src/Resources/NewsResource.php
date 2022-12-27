<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class NewsResource extends BaseResource
{
    public function preMatchNews(): array
    {
        return $this->get(
            url: 'news/pre-match'
        );
    }

    public function preMatchNewsBySeasonId(int|string $id): array
    {
        return $this->get(
            url: "news/pre-match/seasons/{$id}"
        );
    }

    public function preMatchNewsForUpcomingFixtures(): array
    {
        return $this->get(
            url: 'news/pre-match/upcoming'
        );
    }
}
