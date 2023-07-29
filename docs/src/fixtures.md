# Fixtures

## GET All Fixtures

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->all();
```

## GET Fixture by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byId($id);
```

## GET Fixtures by Multiple IDs

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byMultipleIds([$idA, $idB]);
```

## GET Fixture by Date

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byDate('2022-12-28');
```

## GET Fixture by Date Range

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byDateRange('2022-12-28', '2022-12-31');
```

## GET Fixture by Date Range for Team

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byDateRange('2022-12-28', '2022-12-31', $teamId);
```

## GET Fixture by Head To Head

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byHeadToHead($teamA, $teamB);
```

## GET Fixture by Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->searchByName($name);
```

## GET Upcoming Fixtures by Market ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->upcomingByMarketId($marketId);
```

## GET Fixture by Last Updated Fixtures

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->lastUpdated();
```