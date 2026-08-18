<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetCursor
{
    /**
     * Set the `cursor` query parameter used by Sportmonks' cursor-based
     * pagination. Pass in whatever `pagination.next_cursor` contained in the
     * previous response — Sportmonks' documentation shows it as a bare
     * opaque token, but in practice the API returns a full URL (e.g.
     * "https://api.sportmonks.com/v3/football/fixtures?include=state&cursor=XYZ").
     * Both shapes are accepted; a full URL has its `cursor` query parameter
     * extracted automatically.
     *
     * Cursor pagination is mutually exclusive with page-based pagination:
     * the requested page size is already baked into the cursor token
     * itself (decode one and you'll find the per_page value inside it), so
     * Sportmonks does not accept `page`/`per_page` alongside `cursor`.
     * Calling this therefore drops any previously set `page`/`per_page`.
     *
     * @see https://docs.sportmonks.com/v3/tutorials-and-guides/tutorials/introduction/pagination
     */
    public function setCursor(?string $cursor): static
    {
        if ($cursor !== null) {
            unset($this->query['page'], $this->query['per_page']);

            $this->query['cursor'] = $this->extractCursorToken($cursor);
        }
        return $this;
    }

    private function extractCursorToken(string $cursor): string
    {
        if (! str_contains($cursor, '://')) {
            return $cursor;
        }

        parse_str((string) parse_url($cursor, PHP_URL_QUERY), $query);

        return $query['cursor'] ?? $cursor;
    }
}
