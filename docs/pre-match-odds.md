# Pre-match Odds

## GET All Odds

```php
use SportmonksFootballApi;

SportmonksFootballApi::preMatchOdd()->all();
```

## GET Odds by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::preMatchOdd()->byFixtureId($fixtureId);
```

## GET Odds by Fixture ID and Bookmaker ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::preMatchOdd()->byFixtureIdAndBookmakerId($fixtureId, $bookmakerId);
```

## GET Odds by Fixture ID and Market ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::preMatchOdd()->byFixtureIdAndMarketId($fixtureId, $marketId);
```

## GET Last Updated Odds

```php
use SportmonksFootballApi;

SportmonksFootballApi::preMatchOdd()->lastUpdated();
```