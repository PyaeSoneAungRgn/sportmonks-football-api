# Seasons

## GET All Seasons

```php
use SportmonksFootballApi;

SportmonksFootballApi::season()->all();
```

## GET Season by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::season()->byId($id);
```

## GET Seasons by Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::season()->byTeamId($teamId);
```

## GET Seasons by Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::season()->searchByName($name);
```

## GET Brackets by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::season()->bracketsBySeasonId($seasonId);
```