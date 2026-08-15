# Premium Odds

## GET All Premium Odds

```php
use SportmonksFootballApi;

SportmonksFootballApi::premiumOdd()->all();
```

## GET Premium Odds by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::premiumOdd()->byFixtureId($fixtureId);
```

## GET Premium Odds by Fixture ID and Bookmaker ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::premiumOdd()->byFixtureIdAndBookmakerId($fixtureId, $bookmakerId);
```

## GET Premium Odds by Fixture ID and Market ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::premiumOdd()->byFixtureIdAndMarketId($fixtureId, $marketId);
```

## GET Updated Premium Odds Between Time Range

```php
use SportmonksFootballApi;

SportmonksFootballApi::premiumOdd()->updatedBetweenTimeRange($fromTimestamp, $toTimestamp);
```

## GET Updated Historical Odds Between Time Range

```php
use SportmonksFootballApi;

SportmonksFootballApi::premiumOdd()->historicalUpdatedBetweenTimeRange($fromTimestamp, $toTimestamp);
```

## GET All Historical Odds

```php
use SportmonksFootballApi;

SportmonksFootballApi::premiumOdd()->allHistorical();
```
