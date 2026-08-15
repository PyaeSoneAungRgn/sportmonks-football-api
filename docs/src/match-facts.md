# Match Facts (beta)

## GET All Available Match Facts

```php
use SportmonksFootballApi;

SportmonksFootballApi::matchFact()->all();
```

## GET Match Facts by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::matchFact()->byFixtureId($fixtureId);
```

## GET Match Facts by Date Range

```php
use SportmonksFootballApi;

SportmonksFootballApi::matchFact()->byDateRange('2022-12-28', '2022-12-31');
```

## GET Match Facts by League ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::matchFact()->byLeagueId($leagueId);
```
