# Commentaries

## GET All Commentaries

```php
use SportmonksFootballApi;

SportmonksFootballApi::commentary()->all();
```

## GET Commentaries by Fixture ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::commentary()->byFixtureId($fixtureId);
```