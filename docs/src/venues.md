# Venues

## GET All Venues

```php
use SportmonksFootballApi;

SportmonksFootballApi::venue()->all();
```

## GET Venue by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::venue()->byId($id);
```

## GET Venues by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::venue()->bySeasonId($seasonId);
```

## GET Venues by Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::venue()->searchByName($name);
```