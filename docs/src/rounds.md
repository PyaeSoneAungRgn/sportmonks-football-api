# Rounds

## GET All Rounds

```php
use SportmonksFootballApi;

SportmonksFootballApi::round()->all();
```

## GET Rounds by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::round()->byId($id);
```

## GET Rounds by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::round()->bySeasonId($seasonId);
```

## GET Rounds by Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::round()->searchByName($name);
```