<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetPerPage
{
    /**
     * `per_page` is mutually exclusive with cursor-based pagination — the
     * page size is already encoded inside the cursor token itself, so
     * setting `per_page` drops any previously set `cursor`. Set `per_page`
     * before your first (cursor-less) request instead; it carries over
     * automatically into the cursor that Sportmonks returns.
     */
    public function setPerPage(int $perPage): static
    {
        unset($this->query['cursor']);

        $this->query['per_page'] = $perPage;

        return $this;
    }
}
