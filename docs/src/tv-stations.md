# TV Stations

## GET All TV Stations

```php
use SportmonksFootballApi;

SportmonksFootballApi::tvStation()->all();
```

## GET TV Station by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::tvStation()->byId($id);
```

## GET TV Stations by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::tvStation()->byFixtureId($fixtureId);
```