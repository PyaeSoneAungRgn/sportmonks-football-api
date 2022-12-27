# Sportmonks Football Api

Laravel package for [Sportmonks Football Api(V3)](https://www.sportmonks.com/football-api-3-0-docs/)

## Installation

WIP

## Documentation

WIP

## Basic Usage

### Get All Fixtures
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->all();
```

### Get Fixture by ID
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byId($id);
```

## Request options

### Include
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setInclude('league;lineups')
	->all();
```

### Filter
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setInclude('events.type')
	->setFilter('eventTypes:18,14')
	->all();
```

### Select
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setSelect('name')
	->all();
```

### Page
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setPage(2)
	->all();
```