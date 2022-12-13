# Sportmonks Football Api

Laravel package for [Sportmonks Football Api(V3)](https://www.sportmonks.com/football-api-3-0-docs/)

## Installation

WIP

## Documentation

WIP

## Basic Usage

Get All Fixtures
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->all();
```

Get Fixture by ID
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byId($id);
```

## Request options

Include
```php
use SportmonksFootballApi;

SportmonksFootballApi::setInclude('league;lineups')->fixture()->all();
```

Filter
```php
use SportmonksFootballApi;

SportmonksFootballApi::setInclude('events.type')->setFilter('eventTypes:18,14')->fixture()->all();
```

Select
```php
use SportmonksFootballApi;

SportmonksFootballApi::setSelect('name,home_score,away_score')->fixture()->all();
```

Page
```php
use SportmonksFootballApi;

SportmonksFootballApi::setPage(2)->fixture()->all();
```