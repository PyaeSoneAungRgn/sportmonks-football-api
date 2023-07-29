# Transfers

## GET All Transfers

```php
use SportmonksFootballApi;

SportmonksFootballApi::transfer()->all();
```

## GET Transfers by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::transfer()->byId($id);
```

## GET Latest Transfers

```php
use SportmonksFootballApi;

SportmonksFootballApi::transfer()->latestTransfers();
```

## GET Transfers Between Date Range

```php
use SportmonksFootballApi;

SportmonksFootballApi::transfer()->betweenDateRange('2022-12-28', '2022-12-31');
```

## GET Transfers by Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::transfer()->byTeamId($teamId);
```

## GET Transfers by Player ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::transfer()->byPlayerId($playerId);
```