# Leagues

## GET All Leagues

```php
use SportmonksFootballApi;

SportmonksFootballApi::league()->all();
```

## Get League by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::league()->byId($id);
```

## GET League Live

```php
use SportmonksFootballApi;

SportmonksFootballApi::league()->byLive();
```

## GET League by Fixture Date

```php
use SportmonksFootballApi;

SportmonksFootballApi::league()->byFixtureDate('2022-12-28');
```

## GET League by Country ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::league()->byCountryId($countryId);
```

## GET League Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::league()->searchByName($name);
```