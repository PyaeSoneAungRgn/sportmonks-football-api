# Teams

## GET All Teams

```php
use SportmonksFootballApi;

SportmonksFootballApi::team()->all();
```

## GET Team by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::team()->byId($id);
```

## GET Team by Country ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::team()->byCountryId($countryId);
```

## GET Team by Season ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::team()->bySeasonId($seasonId);
```

## GET Team Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::team()->searchByName($name);
```