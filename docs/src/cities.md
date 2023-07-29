# Cities

## GET All Cities

```php
use SportmonksFootballApi;

SportmonksFootballApi::city()->all();
```

## GET City by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::city()->byId($id);
```

## GET Cities by Search

```php
use SportmonksFootballApi;

SportmonksFootballApi::city()->search($name);
```