<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class CommentaryResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/commentaries'
        );
    }

    public function byFixtureId(int|string $id): array
    {
        return $this->get(
            url: "football/commentaries/fixtures/{$id}"
        );
    }
}
