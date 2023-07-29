# Players

## GET All Players

```php
use SportmonksFootballApi;

SportmonksFootballApi::player()->all();
```

## GET Player by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::player()->byId($id);
```

## GET Players by Country ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::player()->byCountryId($countryId);
```

## GET Players Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::player()->searchByName($name);
```

## GET Last Updated Players

```php
use SportmonksFootballApi;

SportmonksFootballApi::player()->lastUpdated();
```