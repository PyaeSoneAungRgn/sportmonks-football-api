# Referees

## GET All Referees

```php
use SportmonksFootballApi;

SportmonksFootballApi::referee()->all();
```

## GET Referees by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::referee()->byId($id);
```

## GET Referees by Country ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::referee()->byCountryId($countryId);
```

## GET Referees Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::referee()->searchByName($name);
```