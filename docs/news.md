# News

## GET Pre-Match News

```php
use SportmonksFootballApi;

SportmonksFootballApi::news()->preMatchNews();
```

## GET Pre-Match News by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::news()->preMatchNewsBySeasonId($seasonId);
```

## GET Pre-Match News for Upcoming Fixtures

```php
use SportmonksFootballApi;

SportmonksFootballApi::news()->preMatchNewsForUpcomingFixtures($seasonId);
```