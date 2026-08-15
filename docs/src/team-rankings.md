# Team Rankings (beta)

## GET All Team Rankings

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamRanking()->all();
```

## GET Team Rankings by Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamRanking()->byTeamId($teamId);
```

## GET Team Rankings by Date

```php
use SportmonksFootballApi;

SportmonksFootballApi::teamRanking()->byDate('2022-12-28');
```
