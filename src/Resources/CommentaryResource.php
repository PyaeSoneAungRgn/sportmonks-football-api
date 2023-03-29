<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class CommentaryResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'commentaries'
        );
    }

    public function byFixtureId(int|string $id): \stdClass
    {
        return $this->get(
            url: "commentaries/fixtures/{$id}"
        );
    }
}
