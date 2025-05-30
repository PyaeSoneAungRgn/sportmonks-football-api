<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetPerPage
{
    public function setPerPage(int $perPage): static
    {
        $this->query['per_page'] = $perPage;

        return $this;
    }
}
