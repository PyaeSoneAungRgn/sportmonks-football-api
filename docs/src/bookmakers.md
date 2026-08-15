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

## GET All Premium Bookmakers

```php
use SportmonksFootballApi;

SportmonksFootballApi::bookmaker()->premium();
```

## GET Bookmaker Match ID Mappings by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::bookmaker()->matchIdMappingsByFixtureId($fixtureId);
```