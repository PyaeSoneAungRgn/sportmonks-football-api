# Pagination

[Official Documentation](https://docs.sportmonks.com/v3/tutorials-and-guides/tutorials/introduction/pagination)

## Set Page

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setPage(2)
	->all();
```

## Set Per Page

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setPerPage(15)
	->all();
```

## Cursor Based Pagination

Sportmonks V3 recommends cursor based pagination over `setPage()` for
iterating through large result sets. Every paginated response returns a
`pagination.next_cursor` value — pass it back in via `setCursor()` to fetch
the next batch of results. Keep going until `has_more` is `false`.

> **Note:** Sportmonks' own documentation shows `next_cursor` as a bare
> opaque token, but in practice the API returns it as a **full URL**, e.g.
> `https://api.sportmonks.com/v3/football/fixtures?include=state&cursor=WzEsNTAsWzUwXSxbWyJzcG9ydHMuZml4dHVyZXMuaWQiLDBdXV0`.
> `setCursor()` accepts either shape — pass `pagination()->next_cursor`
> straight through and it extracts the `cursor` value for you.

### `cursor` is mutually exclusive with `page` and `per_page`

Sportmonks does not accept `page`/`per_page` together with `cursor` — the
page size you asked for is already baked into the cursor token itself
(decode one and you'll find the `per_page` value inside it), and cursor
pagination has no concept of jumping to an arbitrary `page`.

To make this hard to get wrong, `setCursor()`, `setPage()`, and
`setPerPage()` are mutually exclusive **regardless of call order** —
whichever you call last wins and clears the other two:

```php
// setPerPage() is dropped because setCursor() is called after it:
SportmonksFootballApi::fixture()->setPerPage(50)->setCursor($cursor)->all();
// → sends only `cursor`

// setCursor() is dropped because setPage() is called after it:
SportmonksFootballApi::fixture()->setCursor($cursor)->setPage(2)->all();
// → sends only `page`
```

Set `per_page` on your **first** (cursor-less) request only — it carries
over into the `next_cursor` Sportmonks returns, so every subsequent
`setCursor()` call keeps that same page size automatically.

```php
use SportmonksFootballApi;

// First request: no cursor yet, per_page applies.
SportmonksFootballApi::fixture()
	->setPerPage(50)
	->all();

// Subsequent requests: only the cursor — per_page is already encoded in it.
SportmonksFootballApi::fixture()
	->setCursor('WzEsMixbMTk3MTAxMDBdLFtbInNwb3J0cy5maXh0dXJlcy5pZCIsMV1dXQ')
	// or, just as valid:
	// ->setCursor('https://api.sportmonks.com/v3/football/fixtures?include=state&cursor=WzEsNTAsWzUwXSxbWyJzcG9ydHMuZml4dHVyZXMuaWQiLDBdXV0')
	->all();
```

### Example: fetching every page with a cursor

`when()` is available on every resource via Laravel's `Conditionable` trait:

```php
$cursor = null;

do {
    $fixtures = SportmonksFootballApi::fixture()
        ->when(
            $cursor,
            fn ($resource) => $resource->setCursor($cursor),
            fn ($resource) => $resource->setPerPage(50), // only on the first request
        )
        ->all();

    // ...handle $fixtures->collect('data')...

    $cursor = $fixtures->pagination()->next_cursor;
} while ($fixtures->pagination()->has_more === true);
```

> `setPage()`, `setPerPage()`, and `setCursor()` are mutually exclusive —
> the Sportmonks API rejects (or ignores) `page`/`per_page` once a `cursor`
> is present, so use page-based (`setPage()`/`setPerPage()`) or
> cursor-based (`setCursor()`) pagination, never both at once.
