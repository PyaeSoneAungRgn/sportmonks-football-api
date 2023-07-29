# Standings

## GET All Standings

```php
use SportmonksFootballApi;

SportmonksFootballApi::standing()->all();
```

## GET Standing by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::standing()->bySeasonId($seasonId);
```

## GET Standings by Round ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::standing()->byRoundId($roundId);
```

## GET Standing Correction by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::standing()->standingCorrectionBySeasonId($seasonId);
```

## Get Live Standings by League ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::standing()->liveStandingsByLeagueId($leagueId);
```