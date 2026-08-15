# Predictions

## GET Probabilities

```php
use SportmonksFootballApi;

SportmonksFootballApi::prediction()->probabilities();
```

## GET Predictability by League ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::prediction()->probabilitiesByLeagueId($leagueId);
```

## GET Probabilities by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::prediction()->probabilitiesByFixtureId($fixtureId);
```

## GET Value Bets

```php
use SportmonksFootballApi;

SportmonksFootballApi::prediction()->valueBets();
```

## GET Value Bets by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::prediction()->valueBetsByFixtureId($fixtureId);
```

## GET Live Probabilities

```php
use SportmonksFootballApi;

SportmonksFootballApi::prediction()->liveProbabilities();
```

## GET Live Probabilities by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::prediction()->liveProbabilitiesByFixtureId($fixtureId);
```
