# Coaches

## GET All Coaches

```php
use SportmonksFootballApi;

SportmonksFootballApi::coach()->all();
```

## GET Coaches by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::coach()->byId($id);
```

## GET Coaches by Country ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::coach()->byCountryId($countryId);
```

## GET Coaches Search by Name

```php
use SportmonksFootballApi;

SportmonksFootballApi::coach()->searchByName($name);
```

## GET Last Updated Coaches

```php
use SportmonksFootballApi;

SportmonksFootballApi::coach()->lastUpdated();
```