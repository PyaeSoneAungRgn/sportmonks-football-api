<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class NewsResource extends BaseResource
{
    public function preMatchNews(): \stdClass
    {
        return $this->get(
            url: 'news/pre-match'
        );
    }

    public function preMatchNewsBySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "news/pre-match/seasons/{$id}"
        );
    }

    public function preMatchNewsForUpcomingFixtures(): \stdClass
    {
        return $this->get(
            url: 'news/pre-match/upcoming'
        );
    }
}
