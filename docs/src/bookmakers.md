# Bookmakers

## GET All Bookmakers

```php
use SportmonksFootballApi;

SportmonksFootballApi::bookmaker()->all();
```

## GET Bookmaker by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::bookmaker()->byId($id);
```

## GET Bookmaker by Search

```php
use SportmonksFootballApi;

SportmonksFootballApi::bookmaker()->search($name);
```

## GET Bookmaker by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::bookmaker()->byFixtureId($fixtureId);
```