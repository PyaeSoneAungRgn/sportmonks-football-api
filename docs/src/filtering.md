# Filtering

[Official Documentation](https://docs.sportmonks.com/football2/api/request-options/filtering)

## Filter on includes

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setInclude('events')
	->setFilter('eventTypes:18')
	->byId(18535517);
```

## Filter on multiple includes

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setInclude('events;statistics.type')
	->setFilter('eventTypes:18,14;fixtureStatisticTypes:45')
	->byId(18535517);
```