# Inplay Odds

## GET All Odds

```php
use SportmonksFootballApi;

SportmonksFootballApi::inplayOdd()->all();
```

## GET Odds by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::inplayOdd()->byFixtureId($fixtureId);
```

## GET Odds by Fixture ID and Bookmaker ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::inplayOdd()->byFixtureIdAndBookmakerId($fixtureId, $bookmakerId);
```

## GET Odds by Fixture ID and Market ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::inplayOdd()->byFixtureIdAndMarketId($fixtureId, $marketId);
```

## GET Last Updated Odds

```php
use SportmonksFootballApi;

SportmonksFootballApi::inplayOdd()->lastUpdated();
```