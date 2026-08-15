# Statistics

## GET Season Statistics by Participant

```php
use SportmonksFootballApi;

SportmonksFootballApi::statistics()->seasonStatisticsByParticipant('players', $participantId);
```

Supported participant types: `players`, `teams`, `coaches`, `referees`.

## GET Stage Statistics by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::statistics()->stageStatisticsById($stageId);
```

## GET Round Statistics by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::statistics()->roundStatisticsById($roundId);
```
