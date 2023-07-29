<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait WithQuery
{
    public function withQueries(array $query): static
    {
        $this->query = array_merge($this->query, $query);

        return $this;
    }
}
