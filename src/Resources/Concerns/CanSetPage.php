<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetPage
{
    public function setPage(int $page): static
    {
        $this->query['page'] = $page;

        return $this;
    }
}
