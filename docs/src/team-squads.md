# Team Squads

## GET Team Squads by Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamSquad()->all();
```

## GET Team Squads by Team and Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamSquad()->byTeamIdAndSeasonId($teamId, $seasonId);
```

## GET Extended Team Squads by Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamSquad()->extendedByTeamId($teamId);
```
