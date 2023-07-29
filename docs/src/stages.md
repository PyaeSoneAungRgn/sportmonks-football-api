# Stages

## GET All Stages

```php
use SportmonksFootballApi;

SportmonksFootballApi::stage()->all();
```

## GET Stages by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::stage()->byId($stageId);
```

## GET Stages by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::stage()->bySeasonId($seasonId);
```

## GET Stages by Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::stage()->searchByName($name);
```