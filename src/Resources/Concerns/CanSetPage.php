<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetPage
{
    /**
     * Page-based pagination is mutually exclusive with cursor-based
     * pagination in Sportmonks' API, so setting a page drops any
     * previously set `cursor`.
     */
    public function setPage(int $page): static
    {
        unset($this->query['cursor']);

        $this->query['page'] = $page;

        return $this;
    }
}
