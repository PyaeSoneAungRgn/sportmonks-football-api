# Team of the Week (TOTW) (beta)

## GET All Available TOTWs

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamOfTheWeek()->all();
```

## GET TOTW per Round

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamOfTheWeek()->byRoundId($roundId);
```

## GET Latest TOTW

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamOfTheWeek()->latestByLeagueId($leagueId);
```
