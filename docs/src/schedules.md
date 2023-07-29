# Schedules

## GET Schedules by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::schedule()->bySeasonId($seasonId);
```

## GET Schedules by Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::schedule()->byTeamId($teamId);
```

## GET Schedules by Season ID and Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::schedule()->bySeasonIdAndTeamId($seasonId, $teamId);
```