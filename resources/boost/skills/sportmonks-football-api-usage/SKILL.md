---
name: sportmonks-football-api-usage
description: Work with the Sportmonks Football Api package — a Laravel wrapper for the Sportmonks Football API v3. Covers installation, configuration, accessing resources, request options, and response handling.
---

# Sportmonks Football Api Usage

## When to use this skill
Use this skill whenever you need to fetch football data (fixtures, livescores, leagues, teams, players, odds, standings, statistics, etc.) through the `pyaesoneaung/sportmonks-football-api` Laravel package.

## Installation
- Install via Composer: `composer require pyaesoneaung/sportmonks-football-api`
- Set `.env` values:
  - `SPORTMONKS_FOOTBALL_API_TOKEN` (required)
  - `SPORTMONKS_FOOTBALL_TIMEZONE` (default `UTC`)
  - `SPORTMONKS_FOOTBALL_RETURN_TYPE` (`array` default | `collection` | `response` | `dto`)
- Publish the config with `php artisan vendor:publish --tag=sportmonks-football-api-config` (keys: `base_url`, `api_token`, `timezone`, `return_type`).

## Accessing resources
Use the facade (or inject `PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi`). Each accessor returns a resource with chainable request-option methods:

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->all();
SportmonksFootballApi::fixture()->byId($fixtureId);
```

Available accessors:

- Livescores: `livescore()`
- Fixtures: `fixture()`
- Leagues, Seasons, Schedules, Stages, Rounds, Standings, Topscorers: `league()`, `season()`, `schedule()`, `stage()`, `round()`, `standing()`, `topscorer()`
- Teams, Players, Coaches, Referees, Squads: `team()`, `player()`, `coach()`, `referee()`, `teamSquad()`
- Transfers, Transfer rumours: `transfer()`, `transferRumour()`
- Venues, TV stations, States: `venue()`, `tvStation()`, `state()`
- Predictions, Odds: `prediction()`, `preMatchOdd()`, `inplayOdd()`, `premiumOdd()`, `market()`, `bookmaker()`
- Expected: `expected()`, `premiumExpectedLineup()`
- Statistics: `statistics()`
- Beta: `matchFact()`, `teamRanking()`, `teamOfTheWeek()`
- Commentary, News, Rivals: `commentary()`, `news()`, `rival()`
- Core: `continent()`, `country()`, `region()`, `city()`, `type()`, `filter()`, `timezone()`, `my()`

## Request options (chain before the final call)
```php
SportmonksFootballApi::fixture()
    ->setSelect('name')
    ->setInclude('events.type')
    ->setFilter('eventTypes:18,14')
    ->setSortBy('starting_at')
    ->orderByDesc()
    ->setPerPage(25)
    ->setPage(2)
    ->all();
```
Available: `setSelect()`, `setInclude()`, `setFilter()`, `setSortBy()`, `orderByAsc()`, `orderByDesc()`, `setPerPage()`, `setPage()`, `withQueries(['foo' => 'bar'])`.

## Return types
Controlled by `SPORTMONKS_FOOTBALL_RETURN_TYPE`: array (default), `Illuminate\Support\Collection`, `Illuminate\Http\Client\Response`, or `ResponseDto`. When `dto`, use `->response()`, `->collect()`, `->rateLimit()`, `->pagination()`.

## Best practices
- Always set the token in `.env`, never hard-code it.
- Chain request options fluently; the request fires on the final method call (`all()`, `byId()`, `byDate()`, `searchByName()`, etc.).
- Use `setFilter()` for type/state/season filtering; use `withQueries()` for raw query parameters.
- For pagination use `setPerPage()`/`setPage()` and `ResponseDto::pagination()` when `return_type=dto`.
