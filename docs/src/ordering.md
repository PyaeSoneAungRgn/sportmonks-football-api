# Ordering

[Official Documentation](https://docs.sportmonks.com/football/api/request-options/ordering)

## Ascending

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->orderAsc()
	->all();
```

## Descending

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->orderDesc()
	->all();
```

## Sort By

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
    ->sortBy('starting_at')
	->orderDesc()
	->all();
```
