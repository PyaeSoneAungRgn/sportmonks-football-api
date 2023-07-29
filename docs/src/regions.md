# Regions

## GET All Regions

```php
use SportmonksFootballApi;

SportmonksFootballApi::region()->all();
```

## GET Region by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::region()->byId($id);
```

## GET Regions by Search

```php
use SportmonksFootballApi;

SportmonksFootballApi::region()->search($name);
```