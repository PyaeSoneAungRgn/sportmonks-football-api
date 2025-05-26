<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class CommentaryResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/commentaries'
        );
    }

    public function byFixtureId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/commentaries/fixtures/{$id}"
        );
    }
}
